<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shorcut icon" href="assets/img/logo/logoGnavBar.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/sass/css/style.css">
</head>
<html>
    <body>

        <?php include 'libs/header.php'; ?>
        
        <main>
            <div class="containerGénéral">
                <section id="banniere-header">
                   <div class="container-fluid background-img divContactezNous">
                        <div class="capsule">
                            <div class="cell is-third left">
                                <div class="info">
                                    <h1><span class="italic">Contact us</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>     
                </section>

                <section id="bloc-contact">
                    <div class="boltform">
                        <form action="">
                            <div class="container wrapper-form">

                                <h2 class="unProjet">A project, a desire, a question?</h2>
                               
                                <div class="row content">
                                    <div class="col-12">

                                    </div>

                                    <div class="col-12 col-sm-6 bloc-input">
                                        <div class="boltforms-row row">
                                             <span class="boltforms-label col-12"><label for="name" class="required">Name</label></span>
                                             <span class="boltforms-error col-12"></span>
                                             <span class="boltforms-value col-12"><input type="text" id="name" name="name" required="required" /></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 bloc-input">
                                        <div class="boltforms-row row">
                                             <span class="boltforms-label col-12"><label for="entreprise" class="required">Company</label></span>
                                             <span class="boltforms-error col-12"></span>
                                             <span class="boltforms-value col-12"><input type="text" id="entreprise" name="entreprise" required="required" /></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 bloc-input">
                                        <div class="boltforms-row row">
                                             <span class="boltforms-label col-12"><label for="email" class="required">E-mail</label></span>
                                             <span class="boltforms-error col-12"></span>
                                             <span class="boltforms-value col-12"><input type="email" id="email" name="email" required="required" /></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 bloc-input">
                                        <div class="boltforms-row row">
                                             <span class="boltforms-label col-12"><label for="telephone" class="required">Phone</label></span>
                                             <span class="boltforms-error col-12"></span>
                                             <span class="boltforms-value col-12"><input type="email" id="telephone" name="telephone" required="required" /></span>
                                        </div>
                                    </div>

                                    
                                    <div class="col-12 bloc-input">
                                        <div class="boltforms-row boltforms-objet-demande-row row">
                                            <span class="boltforms-label col-12"><label for="votredemande" class="required">Your request</label></span>
                                            <span class="boltforms-error col-12"></span>
                                            <span class="boltforms-value col-12">
                                                <div class="select selectDemande">
                                                    <select id="votredemande" name="votredemande" class="objet-demande"><option value="Demande de devis">Ask for a quotation</option><option value="Demande d&#039;informations">Information request</option></select>
                                                </div>   
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-12 bloc-input">
                                        <div class="boltforms-row row">
                                            <span class="boltforms-label col-12"><label for="message" class="required">Your message</label></span>
                                            <span class="boltforms-error col-12"></span>
                                            <span class="boltforms-value col-12"><textarea id="message" name="message" required="required" rows="7" cols="72"></textarea></span>
                                        </div>
                                     </div>

                                     <!-- <div class="col-12 recaptcha">
                                        
                                            <div class="boltforms-row">
                                                <span class="boltforms-label">
                                                    <label for="form_message" class="required">Veuillez entrer le reCaptcha</label>
                                                </span>
                                            <div class="g-recaptcha" data-sitekey="6LcBjdgUAAAAAGxZ6vj6-zwgPhJqSSiVTPvSvZAB"></div>
                                        </div>
                                
                                    </div> -->

                                    <div class="divBtnSubmit">
                                        <button class="btn">
                                            <span class="label">Send my request</span>
                                        </button>
                                    </div>


                                </div>
                
                            </div>
                        </form>    
                    </div>           
                
                </section>
            </div>
        </main>    
   
    </body>   
</html>