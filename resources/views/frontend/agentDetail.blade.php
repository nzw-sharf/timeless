<?php 
$output = '';

$watsapp = $agent->contact_number ? "https://wa.me/". str_replace(' ', '', $agent->contact_number) : "https://wa.me/". str_replace(' ', '', $contact_number);
$email = $agent->email ? $agent->email : $email ;
$phone = $agent->contact_number ? str_replace(' ', '', $agent->contact_number) :  str_replace(' ', '', $contact_number) ;
$image = $agent->image ? $agent->image : $agent->avatar;
$nationality = $agent->nationality ? $agent->nationality : '';
$language = $agent->languages ? $agent->languages->implode('name', ',') : '';
$community = $agent->communities ? $agent->communities->implode('name', ',') : '';
$output .= '<div class="row">
                <div class="col-12 col-lg-12">
                    <div class="p-3 propCard">
                        <div class="row">
                            <div class="col-lg-8 col-12 my-auto  order-2 order-md-1 order-lg-1">
                                <div class="agentDesc">
                                    <h5 class="text-primary text-uppercase fw-bold">'.
                                            $agent->name .'</h5>
                                    <p class="text-para">  '.$agent->designation.' </p>
                                </div>
                                <div class="mt-2">
                                    <a href="t'.$watsapp.'"
                                        class="text-decoration-none text-primary"><i
                                            class="fa fa-whatsapp"></i> '.$watsapp.'
                                            </a>
                                </div>
                                <div class="mb-2 ">
                                    <a href="mailto:'.$email.'"
                                        class="text-decoration-none text-primary"><i
                                            class="fa fa-envelope"></i> '.$email.'</a>
                                </div>
                                <div class="mb-2 ">
                                    <p>Area Specialization : '.$community.'</p>
                                </div>
                                <div class="mb-2 ">
                                    <p>Nationality : '.$nationality.'</p>
                                </div>
                                <div class="mb-2 ">
                                    <p>Language : '.$language.'</p>
                                </div>
                                <div class="my-3">
                                    <div class="row ">
                                        <div class="col-6 col-lg-4 my-auto">
                                            <div class="my-1">
                                                <a href="tel:'.$phone.'"
                                                    class="btn btn-primary rounded-0 btn-sm  w-100 text-decoration-none"><i
                                                        class="fa fa-phone"></i> Call</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-4 my-auto">
                                            <div class="my-1">
                                                <a href="mailto:'.$email.'"
                                                    class="btn btn-primary btn-sm  w-100  rounded-0 text-decoration-none"><i
                                                        class="fa fa-envelope"></i> E-mail</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 my-auto">
                                            <div class="my-1">
                                                <a href="'.$watsapp.'"
                                                    target="_blank"
                                                    class="btn btn-success btn-sm  w-100  rounded-0 text-decoration-none"><i
                                                        class="fa fa-whatsapp"></i> WhatsApp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 my-auto  order-1 order-md-2 order-lg-2">
                                <div class="agntImage py-2">
                                    <center><img src="'.asset($image).'"
                                            alt="agent" class="img-fluid rounded-circle shadow"
                                                style="height: 150px;width:150px;object-fit:cover;object-position:top;">
                                    </center>
                                </div>
                            </div>
                          
                            <div class="col-12 col-lg-12 order-3 order-md-3 order-lg-3">
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