<?php 
$output = '';

$watsapp = $agent->contact_number ? "https://wa.me/". str_replace(' ', '', $agent->contact_number) : "https://wa.me/". str_replace(' ', '', $contact_number);
$email = $agent->email ? $agent->email : $email ;
$phone = $agent->contact_number ? str_replace(' ', '', $agent->contact_number) :  str_replace(' ', '', $contact_number) ;
$image = $agent->image ? $agent->image : $agent->avatar;
$output .= '<div class="row">
                <div class="col-12 col-lg-12">
                    <div class="p-3 propCard">
                                    <div class="row">
                                        <div class="col-lg-8 col-8 my-auto order-1 order-md-1 order-lg-1">
                                            <div class="agentDesc">
                                                <h5 class="text-primary text-uppercase fw-bold">'.
                                                     $agent->name .'</h5>
                                                <p class="text-para">  '.$agent->designation.' </p>
                                            </div>
                                            <div class="mt-2">
                                                <a href="tel:'.$phone.'"
                                                    class="text-decoration-none text-primary fs-14"><i
                                                        class="fa fa-phone"></i> '.$phone.'
                                                        </a>
                                            </div><div class="mb-2 ">
                                                <a href="mailto:'.$email.'"
                                                    class="text-decoration-none text-primary fs-14"><i
                                                        class="fa fa-envelope"></i> '.$email.'</a>
                                            </div>
                                            <div class="row">
                                            <div class="col-6 col-lg-4 my-auto">
                                            <div class="my-1">
                                                <a href="tel:'.$phone.'"
                                                    class="btn btn-primary rounded-0 btn-sm text-decoration-none"><i
                                                        class="fa fa-phone"></i> Call</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-4 my-auto">
                                            <div class="my-1">
                                                <a href="mailto:'.$email.'"
                                                    class="btn btn-primary btn-sm   rounded-0 text-decoration-none"><i
                                                        class="fa fa-envelope"></i> E-mail</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 my-auto">
                                            <div class="my-1">
                                                <a href="'.$watsapp.'"
                                                    target="_blank"
                                                    class="btn btn-success btn-sm   rounded-0 text-decoration-none"><i
                                                        class="fa fa-whatsapp"></i> WhatsApp</a>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-4 my-auto order-2 order-md-2 order-lg-2">
                                            <div class="agntImage">
                                                <center><img src="'.asset($image).'"
                                                        alt="agent" class="img-fluid rounded-circle shadow"
                                                         style="height: 150px;width:150px;">
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="propDesc text-para">
                                            '.$agent->description.'
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>';
                            echo $output;
?>