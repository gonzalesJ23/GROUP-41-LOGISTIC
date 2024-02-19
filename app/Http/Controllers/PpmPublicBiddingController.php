<?php

namespace App\Http\Controllers;

use App\Models\PpmPublicBidding;
use Illuminate\Http\Request;

class PpmPublicBiddingController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $publicBiddings = PpmPublicBidding::all();
    return view('app.ppm-public-biddings.index', compact('publicBiddings'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('app.ppm-public-biddings.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'bid_document' => 'required',
      'bid_start' => 'required|date',
      'bid_end' => 'required|date',
      'bid_status' => 'required|in:open,closed,cancelled',
    ]);

    PpmPublicBidding::create($validatedData);

    return redirect()
      ->route('ppm-public-biddings.index')
      ->with('success', 'Public bidding created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(PpmPublicBidding $publicBidding)
  {
    return view('app.ppm-public-biddings.show', compact('publicBidding'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($publicBiddingId)
  {
    $publicBidding = PpmPublicBidding::findOrFail($publicBiddingId);
    return view('app.ppm-public-biddings.edit', compact('publicBidding'));
  }
  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $publicBiddingId)
  {
    $publicBidding = PpmPublicBidding::findOrFail($publicBiddingId);

    $validatedData = $request->validate([
      'bid_document' => 'required',
      'bid_start' => 'required|date',
      'bid_end' => 'required|date',
      'bid_status' => 'required|in:open,closed,cancelled',
    ]);

    $publicBidding->update($validatedData);

    return redirect()
      ->route('ppm-public-biddings.index')
      ->with('success', 'Public bidding updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   */
  public function destroy(PpmPublicBidding $publicBidding)
  {
    $publicBidding->delete();

    return redirect()
      ->route('ppm-public-biddings.index')
      ->with('success', 'Public bidding deleted successfully.');
  }
}
