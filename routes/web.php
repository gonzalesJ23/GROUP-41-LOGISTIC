<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\PublicBidding;
use App\Http\Controllers\pages\SmallValueProcurement;
use App\Http\Controllers\pages\InventoryforSaleLease;
use App\Http\Controllers\pages\CreatePurchaseOrder;
use App\Http\Controllers\pages\PurchaseOrderList;
use App\Http\Controllers\pages\AllInventory;
use App\Http\Controllers\pages\MROInventory;
use App\Http\Controllers\pages\RequestHistory;
use App\Http\Controllers\pages\ApprovalWorkflow;
use App\Http\Controllers\pages\PendingApproval;
use App\Http\Controllers\pages\ReturnedInventory;
use App\Http\Controllers\pages\Locations;
use App\Http\Controllers\pages\ItemsManagementAdd;
use App\Http\Controllers\pages\ItemsManagementList;
use App\Http\Controllers\pages\Reorder;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\PpmPublicBiddingController;
use App\Http\Controllers\PpmSmallValueProcurementController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// pages
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
// Procurement Public Bidding
Route::get('/ppm-public-biddings', [PpmPublicBiddingController::class, 'index'])->name('ppm-public-biddings.index');
Route::get('/ppm-public-biddings/create', [PpmPublicBiddingController::class, 'create'])->name(
  'ppm-public-biddings.create'
);
Route::post('/ppm-public-biddings', [PpmPublicBiddingController::class, 'store'])->name('ppm-public-biddings.store');
Route::get('/ppm-public-biddings/{publicBidding}', [PpmPublicBiddingController::class, 'show'])->name(
  'ppm-public-biddings.show'
);
Route::get('/ppm-public-biddings/{publicBidding}/edit', [PpmPublicBiddingController::class, 'edit'])->name(
  'ppm-public-biddings.edit'
);
Route::put('/ppm-public-biddings/{publicBidding}', [PpmPublicBiddingController::class, 'update'])->name(
  'ppm-public-biddings.update'
);
Route::delete('/ppm-public-biddings/{publicBidding}', [PpmPublicBiddingController::class, 'destroy'])->name(
  'ppm-public-biddings.destroy'
);
// Procurement Small Value Procurement
Route::get('ppm-small-value-procurement', [PpmSmallValueProcurementController::class, 'index'])->name(
  'ppm-small-value-procurements.index'
);
Route::get('/ppm-small-value-procurements/create', [PpmSmallValueProcurementController::class, 'create'])->name(
  'ppm-small-value-procurements.create'
);
Route::post('/ppm-small-value-procurements', [PpmSmallValueProcurementController::class, 'store'])->name(
  'ppm-small-value-procurements.store'
);
Route::get('/ppm-small-value-procurements/{id}', [PpmSmallValueProcurementController::class, 'show'])->name(
  'ppm-small-value-procurements.show'
);
Route::get('/ppm-small-value-procurements/{id}/edit', [PpmSmallValueProcurementController::class, 'edit'])->name(
  'ppm-small-value-procurements.edit'
);
Route::put('/ppm-small-value-procurements/{id}', [PpmSmallValueProcurementController::class, 'update'])->name(
  'ppm-small-value-procurements.update'
);
Route::delete('/ppm-small-value-procurements/{id}', [PpmSmallValueProcurementController::class, 'destroy'])->name(
  'ppm-small-value-procurements.destroy'
);
// Purchase
Route::get('/pages-create-purchase-order', [CreatePurchaseOrder::class, 'index'])->name('pages-create-purchase-order');
Route::get('/pages-purchase-order-list', [PurchaseOrderList::class, 'index'])->name('pages-purchase-order-list');
// Inventory
Route::get('/pages-all-inventory', [AllInventory::class, 'index'])->name('pages-all-inventory');
Route::get('/pages-mro-inventory', [MROInventory::class, 'index'])->name('pages-mro-inventory');
Route::get('/pages-request-history', [RequestHistory::class, 'index'])->name('pages-request-history');
Route::get('/pages-approval-workflow', [ApprovalWorkflow::class, 'index'])->name('pages-approval-workflow');

Route::get('/pages-pending-approval', [PendingApproval::class, 'index'])->name('pages-pending-approval');
Route::get('/pages-returned-inventory', [ReturnedInventory::class, 'index'])->name('pages-returned-inventory');
Route::get('/pages-locations', [Locations::class, 'index'])->name('pages-locations');
Route::get('/pages-items-management-add', [ItemsManagementAdd::class, 'index'])->name('pages-items-management-add');
Route::get('/pages-items-management-list', [ItemsManagementList::class, 'index'])->name('pages-items-management-list');
Route::get('/pages-reorder', [Reorder::class, 'index'])->name('pages-pages-reorder');
// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
