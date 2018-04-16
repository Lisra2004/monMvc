<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>

<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>app/img/tn_gamer.jpg" title="logo"></a> </li>
            <li><a href="<?= BASE_URL ?>">Home</a></li>
            <li><a href="<?= BASE_URL ?>pageOne">pageOne</a> </li>
            <li><a href="<?= BASE_URL ?>pageTwo">pageTwo</a> </li>
            <li><a href="<?= BASE_URL ?>faq">FAQ</a></li>
            <li class="dropdown">
                <a href="<?= BASE_URL ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?= BASE_URL ?>db">Database</a></li>
                    <li><a href="<?= BASE_URL ?>adminFaq">Faq</a></li>
                    <li><a href="<?= BASE_URL ?>eraseDb">EraseDb</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
