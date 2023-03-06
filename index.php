<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="papier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="navbar">
            <a href=""><img src="work-5.jpg" alt="logo" class="navbar_title"></a>
            <ul class="navbar_menu">
                <a href="" class="active"><li class="navbar_items">Accueil</li></a>
                <a href=""><li class="navbar_items">Notre equipe</li></a>
                <a href=""><li class="navbar_items">Forum</li></a>
                <a href=""><li class="navbar_items">Nos projets</li></a>
                <a href=""><li class="navbar_items">Contact</li></a>
                <a href=""><li class="navbar_items">A propos</li></a>
            </ul>
            <button class="btn-toggle">
                Menu
            </button>   
        </div>
    </section>
    
    <section>
        <div class="hero">
            <div class="hero_img">
                <img src="photo1.png" alt="illustre" class="image">
            </div>
            <div class="hero_text">
                <h1>One@tech est de retour</h1>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti aliquam, sapiente corrupti 
                fugiat consequuntur beatae assumenda iste. Illo a odio ad dolore ipsam numquam nulla 
                recusandae nihil molestias? Temporibus, mollitia! Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Nesciunt eius aperiam ipsum veniam adipisci et explicabo aliquid tempora cupiditate,
                suscipit doloremque! Sequi, minima? Saepe dolorem asperiores ut consequatur eum iure?
                </P>
                <div >
                    <a href="#" class="bouton">
                        Contactez-nous
                    </a>
                </div>    
            </div>
        </div>
    </section>
    <section>
        <div class="hero_back">
           <div class="card">
                <img src="work-6.jpg" alt="" class="card_i2">
           </div>
           <div class="card">
                <img src="about.jpg" alt="" class="card_i2">
           </div>
           <div class="card">
                <img src="image_1.jpg" alt="" class="card_i2">
            </div>
       </div>
    </section>

    <section>
        <h1 style="text-align: center;">LE NUMERIQUE C'EST NOUS</h1>
        <div class="autres">
            <div class="expertise_2">
                <h1>Nos services</h1>
                    <ul>
                        <li>Création des sites webs</li>
                        <li>Création des applications webs</li>
                        <li>Création des applications mobiles(Android & Ios)</li>
                        <li>Graphisme et autres</li>
                    </ul>
            </div>
            <div class="expertise_1">
                <img src="work-4.jpg" alt="" class="expertise_image">
            </div>
        </div>
    </section>
    <section>
        <h1 style="text-align:center;">NOTRE EQUIPE</h1>
        <div class="hero_back2">
            <div class="">
                <img src="clients-1.jpg" class="card_i1" alt="">
            </div>
            <div class="card">
                <img src="clients-1.jpg" class="card_i1" alt="">
            </div>
            <div class="card">
                <img src="clients-1.jpg" class="card_i1" alt="">
            </div>
            <div class="card">
                <img src="clients-1.jpg" class="card_i1" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="pied_page">
                <img src="login-img.png" alt="">
            <form class="form-group" method="POST">
                <h1 style="text-align: center; text-transform: uppercase;"> Formulaire de contact</h1>
                <p>
                    <label for="">*Nom</label><br>
                    <input type="text" name="nom" placeholder="Inserez votre nom">
                </p>
                    
                <p>
                    <label for="">*Email</label><br>
                    <input type="email" name="email" placeholder="Inserez votre adresse email">
                </p>
                <p>
                    <label for="">*Message</label><br>
                   <textarea name="" name="message"></textarea>
                </p>
                <p>
                    <input type="button" value="Soumettre" class="bouton">
                </p>                
            </form>
        </div>
    </section>
    <footer>
        <div class="signature">
            <p style="text-align: center;"> www.one@tech.com &copy; 2023</p>
        </div>
    </footer>
</body>
</html>