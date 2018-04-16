<h1>Mon MVC Perso</h1>

<ul>
    <li><kbd>Pour</kbd></li>
    <ul>
        <li>Montrer un peu ce que j'ai pu apprendre</li>
    </ul>
</ul>
<h2>Proof of Concept</h2>
<h3>Prototype de site au format MVC personnalisable</h3>

<ul>
    <li><kbd>le but de se POC est</kbd></li>
    <ul>
        <li>montrer ce que j'ai pu apprendre lors de mo stage chez Zen Value</li>
        <li>demontrer qu'on peut apprendre seul (meme si c'est moins rapide)</li>
    </ul>
</ul>


<!--slider right-->
<div id="side-nav-right" >
    <div id="slider_right" style="right:-260px;">
        <div id="sidebar_right" onclick="open_panel()">
            <img src="<?= BASE_URL ?>app/img/contact_us.PNG"/>
        </div>
        <div id="header_right">

            <h2>Contact Form</h2>
            <p>Contact Form</p>
            <form method="post" action="<?= BASE_URL ?>contact">
                <input type="text" name="name" placeholder="Your Name"/>
                <input type="text" name="email" placeholder="Your Email"/>
                <input type="text" name="subject" placeholder="Subject"/>

                <textarea type="text" name="message" placeholder="Your message" rows="5"></textarea><br/>
                <button type="submit" name="submit">Send Message</button>
            </form>

        </div>
    </div>
</div>
<!--slider right end-->
