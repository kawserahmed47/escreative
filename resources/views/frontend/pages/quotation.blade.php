@extends('frontend.master')

@section('content')
@include('frontend.layouts.pageBanner')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>

        <div class="col-md-8">
            <div class="contact">
                <h2 class="contact-title">Get Quotation</h2>
                <p>If you want to quotation, please see our address or call our number or send us
                    on our email, we will contact with you for our own business, so don’t worrie we are
                    beside you to help you.</p>
                <form id="quotationForm-1" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="name-field">
                                <input name="name" id="inputName" required maxlength="50" class="form-control" placeholder="Enter your name" type="text">
                                <span id="err_name" class="text-danger">Name Invalid</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="email-field">
                                <input required maxlength="50" id="inputEmail" name="email" class="form-control" placeholder="Enter you email" type="email">
                                <span id="err_email" class="text-danger">Email Invalid</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="name-field">
                                <input required name="mobile" id="inputMobile" class="form-control" placeholder="Enter your mobile number" type="text">
                                <span id="err_mobile" class="text-danger">Mobile Invalid</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="email-field">
                                <input required maxlength="50" name="subject"  class="form-control" placeholder="Enter your subject" type="text">
                            </div>
                        </div>
                     
                        <div class="col-md-12">
                            <div class="form-group form-text text-center" id="message-field">
                                <textarea required name="message" id="" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12"><button class="dt-btn" type="submit">Send</button></div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-2">

        </div>

    </div>

</div>
<br><br>
    
@endsection



@section('script')
    <script>
        $(document).ready(function(){
            console.log("Jquery Getting");

            $("#err_name").hide();
            $("#err_email").hide();
            $("#err_mobile").hide();

            var err_name = false;
            var err_email = false;
            var err_mobile = false;


            $("#inputName").focusout(function(){
                check_name();
            });

            $("#inputEmail").focusout(function() {
                check_email();
            });

            $("#inputMobile").focusout(function() {
                check_mobile();
            });


            function check_name() {
                var pattern = /^[a-zA-Z ]*$/;
                var name = $("#inputName").val();
                if (pattern.test(name) && name !== '') {
                $("#err_name").hide();
                $("#inputName").css("border","1px solid #34F458");
                } else {
                $("#err_name").html("Contain Characters Only");
                $("#err_name").show();
                $("#inputName").css("border","1px solid #F90A0A");
                err_name = true;
                console.log("name assigning true");
                }
                console.log("getting name check");
            }


            function check_email() {
                var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var email = $("#inputEmail").val();
                if (pattern.test(email) && email !== '') {
                $("#err_email").hide();
                $("#inputEmail").css("border","1px solid #34F458");
                } else {
                $("#err_email").html("Invalid Email");
                $("#err_email").show();
                $("#inputEmail").css("border","1px solid #F90A0A");
                err_email = true;
                }
            
            }

            function check_mobile() {
                var pattern = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
                var mobile = $("#inputMobile").val();
                if (pattern.test(mobile) && mobile !== '') {
                $("#err_mobile").hide();
                $("#inputMobile").css("border","1px solid #34F458");
                } else {
                $("#err_mobile").html("Invalid Number");
                $("#err_mobile").show();
                $("#inputMobile").css("border","1px solid #F90A0A");
                err_mobile = true;
                }
            }





            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $("#quotationForm-1").on('submit', function(e){
                e.preventDefault();

                err_name = false;
                err_email = false;
                err_mobile = false;

                check_name();
                check_email();
                check_mobile();

                console.log(err_name);
                console.log(err_email);
                console.log(err_mobile);
                
                if (err_name === false && err_email === false && err_mobile === false) {
                $.ajax({
                    type: "POST",
                    url: "{{url('/quotation')}}",
                    data:new FormData(this),
                    dataType: "json",
                    contentType:false,
                    cache:false,
                    processData:false,
                    success: function (response) {
                        toastr.success('Successful');
                        location.reload();
                    },
                    
                });
                }else {
                    toastr.error('Invalid Form Submission');
                }


            })  
        })
    </script>
@endsection