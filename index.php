<?php include("./inc/header.inc.php"); ?>

<?php
$reg = @$_POST['reg'];
$nume = "";
$prenume = "";
$email = "";
$email_check="";
$parola = "";
$parola2 ="";
$data_inregistrare="";
$departament ="";

$nume = strip_tags(@$_POST['first_name']);
$prenume = strip_tags(@$_POST['last_name']);
$email = strip_tags(@$_POST['email']);
$parola = strip_tags(@$_POST['password']);
$parola2 = strip_tags(@$_POST['password_confirmation']);
$data_inregistrare = date("Y-m-d");



if(isset($reg)){
  /*  $allowed = array('madadv.com');
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $domain = array_pop(explode('@', $email));

        if (!in_array($domain, $allowed)) {
            echo "<script>alert('Adresa de email nu este valida!');</script>";
        }


    }*/
    if($nume&&$prenume&&$email&&$parola&&$parola2){
        if($parola == $parola2){
            if(strlen($parola)>30 || strlen($parola)<5){
                echo"<script>alert('Adresa de email nu este valida!');</script>";
            }
            else{
                //utilizand md5 encriptam cele 2 parole inainte de a le trimite catre bd
               // $parola = md5($parola);
                //$parola2 = md5($parola2);
                $query = mysqli_query($con, "INSERT INTO utilizatori VALUES('','$nume','$prenume','$email','$parola','$data_inregistrare','0','')");
                die(" Inregistrarea a fost realizata cu succes! Bine ai venit!");
            }
        }
        else{
           // echo "<script>alert('Parolele nu sunt identice!');</script>";
            echo '<script language="javascript">';
            echo 'alert("Parolele nu sunt identice, fratiwear")';
            echo '</script>';
        }
    }
    else{
        echo "<script>alert('Completati toate campurile!');</script>";
    }

}


?>


<div class="container">
    <div class="jumbotron">;


<!--
                    <h4>
                        Fishbone este Rețeaua Socială de Întreprindere care îți permite să colaborezi mai ușor cu colegii din departamente și locații diferite.
                    </h4>  -->


                    <div class="container2" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                                <form  action="index.php" method="POST" role="form">
                                    <h2>Înregistrează-te! <img src="img/Picture1.png" width="81" height="43">
                                        <small>Alătură-te colegilor!</small></h2>
                                    <hr class="colorgraph">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text"
                                                       name="first_name"
                                                       id="first_name"
                                                       class="form-control input-lg"
                                                       placeholder="Nume"
                                                       tabindex="1">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text"
                                                       name="last_name"
                                                       id="last_name"
                                                       class="form-control input-lg"
                                                       placeholder="Prenume"
                                                       tabindex="2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email"
                                               name="email"
                                               id="email"
                                               class="form-control input-lg"
                                               placeholder="Email"
                                               tabindex="4">
                                        <p>
                                        <h6 href="#"><span class="glyphicon glyphicon-lock"></span>
                                            Doar angajații companiei pot accesa rețeaua socială a acesteia. </a></h6>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="password"
                                                       name="password"
                                                       id="password"
                                                       class="form-control input-lg"
                                                       placeholder="Parola"
                                                       tabindex="5">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="password"
                                                       name="password_confirmation"
                                                       id="password_confirmation"
                                                       class="form-control input-lg"
                                                       placeholder="Confirma parola"
                                                       tabindex="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Sunt de acord</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                                        </div>
                                        <div class="col-xs-8 col-sm-9 col-md-9">
                                            Prin apăsarea butonului <strong class="label label-primary">Înregistrare</strong>, confirmați că sunteți de acord cu
                                            <a href="#" data-toggle="modal" data-target="#t_and_c_m">Termenii și condițiile</a> acestui site.
                                        </div>
                                    </div>

                                    <hr class="colorgraph">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6"><input type="submit" name="reg" value="Înregistrare" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Termeni și Condiții</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Termeni și condiții</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>





                  <!--       <form action="#" method="post" id="email" class="form-horizontal"
                              data-fv-framework="bootstrap"
                              data-fv-icon-valid="glyphicon glyphicon-ok"
                              data-fv-icon-invalid="glyphicon glyphicon-remove"
                              data-fv-icon-validating="glyphicon glyphicon-refresh">

                         <div class="form-group">
                               <div class="col-xs-7">
                                    <input class="form-control" name="email"
                                           type="email"
                                           placeholder="Introduceti adresa de email"
                                           data-fv-emailaddress="true"
                                           data-fv-emailaddress-message="Adresa de email nu este validă!" />
                                   </div>

                           <button type="button" class="btn btn-success">Înregistrare</button>
                        </div>

                    </form> -->


    </div>

</div>

</body>
</html>

