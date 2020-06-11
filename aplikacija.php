<?php
    date_default_timezone_set('Europe/Zagreb');
 
    if (isset($_POST['Name'])) {
        $name = $_POST['Name'];
		$club = $_POST['Club'];
        $ex = $_POST['ex'];
        $rating = $_POST['rating'];
        $player = $_POST['player'];
 
        $result = '';
 
        $result .= "<Vote>\n";
 
    
        $result .= '<Name>' . $name . "</Name>\n";
		
	
        $result .= '<Club>' . $club . "</Club>\n";
 
       
        $result .= '<Short explanation>' . $ex . "</Short explanation>\n";
 
     
        $result .= '<Player>' . $player . "</Player>\n";
 
       
        $result .= '<Rating>' . $rating . "</Rating>\n";
 
 
        $result .= '</Vote>';
 
        $filename = 'vote' . date('Y_m_d_h_i_s') . '.xml';
        file_put_contents($filename, $result);
        die('Your vote has successfully been recorded!');
    }
?>
 
<!doctype html>
<html lang="en">
 
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <title>PFA awards</title>
</head>
 
<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">VOTE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
        <a class="nav-link" target="_blank" href="https://www.premierleague.com/stats" >Stats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://www.thepfa.com/thepfa/pfa-awards">The PFA awards</a>
      </li>
    </ul>
  </div>
</nav>
 
    <div class="container mt-4" style="background-color:grey">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-5 text-center mt-4" style="color:white" >Premier League POTY award</h1>
                <form action="aplikacija.php" method="POST">
                  
                    <div class="form-group">
                        <label for="Name">Your full name:</label>
                        <input title="This is your full name" type="text" name="Name" class="form-control" id="Name">
                    </div>
					<hr>
					<label for="rating">Favorite Premier League club:</label>
                    <select class="custom-select" name="Club" id="Club">
						<option value="none">---</option>
                        <option value="AFC Bournemouth">AFC Bournemouth</option>
                        <option value="Arsenal">Arsenal</option>
						<option value="Aston Villa">Aston Villa</option>
                        <option value="Brighton & Hove Albion">Brighton & Hove Albion</option>
						<option value="Burnley">Burnley</option>
                        <option value="Chelsea">Chelsea</option>
						<option value="Crystal Palace">Crystal Palace</option>
                        <option value="Everton">Everton</option>
						<option value="Leicester City">Leicester City</option>
                        <option value="Liverpool">Liverpool</option>
						<option value="Manchester City">Manchester City</option>
                        <option value="Manchester United">Manchester United</option>
						<option value="Newcastle United">Newcastle United</option>
                        <option value="Norwich City">Norwich City</option>
						<option value="Sheffield United">Sheffield United</option>
                        <option value="Southampton">Southampton</option>
						<option value="Tottenham Hotspur">Tottenham Hotspur</option>
                        <option value="Watford">Watford</option>
						<option value="West Ham United">West Ham United</option>
                        <option value="Wolverhampton Wanderers">Wolverhampton Wanderers</option>
                    </select>
					<hr>
					<div class="form-group">
                        <label for="rating">Overall season rating of your club</label>
                        <input type="range" name="rating" class="custom-range" min="1" max="5" step="1" id="rating">
                    </div>
					<hr>
                   
					<label for="rating">Choose player:</label>
                    <select class="custom-select" name="player" id="player">
						<option value="*">---</option>
						<option value="Sadio Mane">Sadio Mane</option>
                        <option value="Jordan Henderson">Jordan Henderson</option>
                        <option value="Kevin De Bruyne">Kevin De Bruyne</option>
                    </select>
					<hr>
                  
                    <div class="form-group">
                        <label for="ex">Short explanation:</label>
                        <textarea class="form-control" name="ex" id="ex" rows="3"></textarea>
                    </div>
                    
 
                    <button type="submit" class="btn btn-primary  mt-3 mb-4" style="background-color:grey; margin-left:240px; border-color:black;">VOTE</button>
					
                </form>
 
            </div>
        </div>
        <div class="mb-5"></div>
    </div>
 

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
 
</html>