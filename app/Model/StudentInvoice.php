<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class StudentInvoice extends Model
{

    public function user(){
        return $this->belongsTo(User::class, 'student_id', 'id'); 
      }
     public function payment(){
        return $this->belongsTo(Payment::class, 'id', 'invoice_id');
      }

     public function paymentdetails(){
        return $this->belongsTo(PaymentDetail::class, 'id', 'invoice_id');
      }

      public function invoicedetails(){
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
      }

       public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
      }

      public function subcategory(){
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
      }

      public function subsubcategory(){
        return $this->belongsTo(SubSubCategory::class, 'sub_sub_category_id', 'id');
      }

      public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
      }

       public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
      }

       public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
      }

      public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
      }

       public function model(){
        return $this->belongsTo(Product::class, 'model', 'id');
      }

      public function size(){
        return $this->belongsTo(Product::class, 'size', 'id');
      }
}
