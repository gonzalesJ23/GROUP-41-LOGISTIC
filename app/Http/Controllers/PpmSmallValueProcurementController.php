<?php

namespace App\Http\Controllers;

use App\Models\PpmSmallValueProcurement;
use Illuminate\Http\Request;

class PpmSmallValueProcurementController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $ppmSmallValueProcurements = PpmSmallValueProcurement::all();
    return view('app.ppm-small-value-procurement.index', compact('ppmSmallValueProcurements'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('app.ppm-small-value-procurement.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'date_published' => 'required',
      'proponent_requests' => 'nullable',
      'rfq_number' => 'required',
      'title' => 'required',
      'submission_deadline' => 'required',
    ]);

    PpmSmallValueProcurement::create($validatedData);

    return redirect()
      ->route('ppm-small-value-procurements.index')
      ->with('success', 'Record created successfully.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $ppmSmallValueProcurement = PpmSmallValueProcurement::findOrFail($id);
    return view('app.ppm-small-value-procurement.show', compact('ppmSmallValueProcurement'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $ppmSmallValueProcurement = PpmSmallValueProcurement::findOrFail($id);
    return view('app.ppm-small-value-procurement.edit', compact('ppmSmallValueProcurement'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'date_published' => 'required',
      'proponent_requests' => 'nullable',
      'rfq_number' => 'required',
      'title' => 'required',
      'submission_deadline' => 'required',
    ]);

    $ppmSmallValueProcurement = PpmSmallValueProcurement::findOrFail($id);
    $ppmSmallValueProcurement->update($validatedData);

    return redirect()
      ->route('ppm-small-value-procurements.index')
      ->with('success', 'Record updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $ppmSmallValueProcurement = PpmSmallValueProcurement::findOrFail($id);
    $ppmSmallValueProcurement->delete();

    return redirect()
      ->route('ppm-small-value-procurements.index')
      ->with('success', 'Record updated successfully.');
  }
}
