@php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
@endphp
<
//Procurement Public Bidding
Schema: :create ('Public_Bidding', function ( Blueprint $table){
 $table->id();
 $table->String('BID_DOCUMENT');
 $table->timestamps('BID_START');
 $table->timestamps('BID_END');
 $table->String('STATUS');
});

//Procurement Small Value Procurement
Schema: :create ('Main_Office_Procurement_Opportunities', function ( Blueprint $table){
  $table->id();
  $table->timestamps('DATE_PUBLISHED');
  $table->String('PROPONENT/REQUESTING_DEPARTMENT/BRANCH');
  $table->string('RFQ_NUMBER',
  50)->unique();
  $table->String('TITLE');
  $table->timestamps('DEADLINE_OF_SUBMISSION_OF_QUOTATIONS');
});

 //Procurement Inventory for Sale/Lease
Schema: :create ('Inventory for Sale/Lease', function ( Blueprint $table){
  $table->id();
  $table->String('INVENTORY_FOR_LEASE');
  $table->Text('DESCRIPTION');
  $table->timestamps('DATE');
});

 //Procurement Inventory for Sale/Lease
Schema: :create ('Inventory_for_Sale/Lease', function ( Blueprint $table){
  $table->id();
  $table->String('INVENTORY_FOR_LEASE');
  $table->String('DESCRIPTION');
  $table->timestamps('Date');
});

//Purchase Create Purchase Order
Schema: :create ('Buyer_Details', function ( Blueprint $table){
  $table->id();
  $table->string('Company_Name1')->nullable();
  $table->string('Phone1',
  20)->nullable();
  $table->string('Address1');
  $table->string('Website');
Schema: :create ('Vendor_Info', function ( Blueprint $table){
    $table->id();
    $table->string('Company_Name2')->nullable();
    $table->string('Supply_Name');
    $table->string('Supply_type')->nullable();
    $table->unsignedInteger('Quantity')->default(1);
Schema: :create('Ship_to', function (Blueprint $table) {
    $table->id();
    $table->string('Name');
    $table->string('Address2');
    $table->string('Phone2',
      20)->nullable();
    $table->string('Company_Name3')->nullable();
    $table->string('Zip_Code',
      20)->nullable();
    $table->text('Other_details')->nullable();
  })));
//Purchase Purchase Order List
Schema: :create('purchase_orders_list', function (Blueprint $table) {
  $table->id();
  $table->string('product_name');
  $table->string('supply_type')->nullable();
  $table->text('supply_details')->nullable();
  $table->unsignedInteger('quantity')->default(1);
  $table->decimal('sale_unit_price',
      10,
      2)->nullable();
  $table->string('inventory_store')->nullable();
});
