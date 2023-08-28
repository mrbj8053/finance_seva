@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <div class="row">

            <div class="col-md-12">

                <div class="card card-widget widget-user">

               <div class="widget-user-header bg-info"style="height: 115px !important;">
               <h3 class="widget-user-username"><strong>Refer Now</strong></h3>
               <h5 class="widget-user-desc">Register users with your referal url and get income</h5>
               </div>

               <div class="card-footer" style="padding-top: 2px;">
                Your Referal Link :
                <h3 id="referUrl" style="
                font-size: 15px;
                border: 1px dotted;
                padding: 9px;
                border-radius: 8px;
            ">{{route('register','sponsor='.Auth::user()->own_id)}}</h3>
            <button type="button" onclick="copyText('referUrl','Referal URL copied.')" class="btn btn-primary">Copy Link</button>
                </div>
               </div>

               </div>



            </div>

    </div>
@endsection
