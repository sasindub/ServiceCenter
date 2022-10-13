<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Center | Buyer Request</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css" />

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
        <!-- nav bar -->
        <!-- As a link -->
        <nav class="navbar navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><div class="row">
                <div class="col-3">
                    <img src="assets/images/lgo.png" alt=""  style="width: 50px;">
                </div>
                <div class="col-9 float-start">
                    <h4 class="float-start mt-2">Service Center</h4>
                </div>
                </div>
            </a>
            <h1 class="float-end br-header">Buyer request</h1>
        </div>
        </nav>
      
        <!-- nav bar end -->

        <!-- success msg -->
        <div id="smsg">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
            </svg>

            <div class="smsg alert alert-success d-flex align-items-center rounded-3" role="alert">
            <span class="text-center" style="margin-left:21px;"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            
                Your Request Has Been Submited Successfully!
            </span>
            </div>
        </div>
        <!-- msg end -->

       <div class="container"> 
            <div class="mt-4">
                <a href="index.php" class="home-link">home > </a> <span>add a request</span>
            </div>
           
            <!-- email -->
            <div class="email-form rounded-1 pt-3 pb-3" id="email-send-div">
                <form action="" method="post" id="email_form">
                    
               
                    <div class="">
                            <span class="mail"><span class="ms-3">E-mail verification</span> <hr></span>
                                
                    </div>
                    <!-- email error msg -->
                    <span class="container" style="color:red;" id="emailError"></span>
                    <div class="ps-3 pe-3 pt-1">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter your e-mail" required>
                        </div>
                    </div>

                    <div class="">
                            <div class="mail"><span class="ms-3"><hr><button type="submit" name="submit" id="submit" class="btn btn-primary ms-3 me-3 float-end">Verify</button></span></div>
                                
                    </div>
                    

                </form>

                <!-- verify -->
                <form action="" method="post" id="verify_form">
                    
               
                    <div class="">
                            <span class="mail"><span class="ms-3">E-mail verification</span> <hr></span>
                                
                    </div>
                      
                    <div class="ps-3 pe-3 pt-0">
                    <span class="" style="color:darkgreen;" id="otpError">OTP code has been sent to your e-mail.</span>
                        <div class="input-group mt-1">
                            <input type="text" class="form-control" name="otp" id="otp" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter the OTP code (xxxx)" required>
                        </div>
                    </div>

                    <div class="">
                            <div class="mail"><span class="ms-3"><hr><button type="submit" name="submitOtp" id="submitOtp" class="btn btn-success ms-3 me-3 float-end">Verify</button></span></div>
                                
                    </div>
                    

                </form>
            </div>

            <!-- requesr form -->
            <div class="mt-5" id="r_form_div">


                <form action="" method="post" id="request_form">
                   <div class="row">
                   <h4 class="pb-3" style="font-size:13pt; font-weight: 600;">Personal details</h4>
                    <!-- name -->
                        <div class="col-6">
                            <span style="color:red" class="pe-1">*</span><span>Name :</span> <br>
                            <input type="text" class="rform-input" name="name" id="name" placeholder="Enter your name" required/>
                        </div>
                        <!-- email -->
                        <div class="col-6">
                            <span style="color:red" class="pe-1">*</span><span>E-mail :</span> <br>
                            <input type="text" class="rform-input" name="emailReq" id="emailReq" placeholder="Enter your e-mail (example@gmail.com)" disabled/>
                        </div>
                        <!-- address -->
                        <div class="col-6 mt-3">
                            <span style="color:red" class="pe-1">*</span><span>Address :</span> <br>
                            <textarea class="rform-input" name="address" id="address" placeholder="Enter your current address" required></textarea>
                        </div>
                        <!-- mobile -->
                        <div class="col-6 mt-3">
                            <span style="color:red" class="pe-1">*</span><span>Mobile :</span> <br>
                            <input type="text" class="rform-input" name="mobile" id="mobile" placeholder="Ex: 07xxxxxxxx" required/>
                        </div>

                        

                        <h4 class="mt-2" style="font-size:13pt; font-weight: 600;">Project details</h4>

                        <!-- project type -->

                        <div class="col-6 mt-3">
                            <span style="color:red" class="pe-1">*</span><span>Type :</span> <br>
                          
                            <select  class="rform-input" name="type" id="type">
                                <option value="1">Select project type</option>
                                <option value="Back-End development">Back-End development</option>
                                <option value="Front-End development">Front-End development</option>
                                <option value="Full-Stack development">Full-Stack development</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Other">Other</option>
                               
                            </select>
                        </div>
                        <!-- duration -->
                        <div class="col-6 mt-3">
                            <span style="color:red" class="pe-1">*</span><span>Duration :</span> <br>
                            <select  class="rform-input" name="duration" id="duration">
                                <option value="1">Select expected duration</option>
                                <option value="5-7 Days">5-7 Days</option>
                                <option value="10-15 Days">10-15 Days</option>
                                <option value="20-25 Days">20-25 Days</option>
                                <option value="1 month">1 month</option>
                                <option value="3 Month">3 Month</option>
                                <option value="Other">Other</option></option> 
                            </select>
                        </div>
                        <!-- budget -->
                        <div class="col-6 mt-3">
                            <span style="color:red" class="pe-1">*</span><span>Budget :</span> <br>
                            <input type="text" class="rform-input" name="currency-field" id="currency-field" pattern="^\Rs\d{1,3}(.\d{3})*(\,\d+)?$" value="" data-type="currency" placeholder="Rs1,000,000.00" required/>
                        </div>
                        <!-- description -->
                        <div class="col-6 mt-3">
                            <span style="color:red" class="pe-1">*</span><span>Description :</span> <br>
                            <textarea class="rform-input" name="desc" id="desc" placeholder="About project..." required></textarea>
                        </div>

                        <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-outline-primary" style="float:right; width:8%;">Confirm</button>
                        </div>
                        
                    </div> 
                </form>  

            </div>



        </div>

        
         <!-- bootstrap JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
     <script src="js/request.js"></script>

     <!-- budget textbox -->

     <script>
        
            $("input[data-type='currency']").on({
                keyup: function() {
                formatCurrency($(this));
                },
                blur: function() { 
                formatCurrency($(this), "blur");
                }
            });


            function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            }


            function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.
            
            // get input value
            var input_val = input.val();
            
            // don't validate empty input
            if (input_val === "") { return; }
            
            // original length
            var original_len = input_val.length;

            // initial caret position 
            var caret_pos = input.prop("selectionStart");
                
            // check for decimal
            if (input_val.indexOf(",") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);
                
                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                right_side += "00";
                }
                
                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = "Rs" + left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = "Rs" + input_val;
                
                // final formatting
                if (blur === "blur") {
                input_val += ".00";
                }
            }
            
            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
            }
     </script>
     
</body>
</html>