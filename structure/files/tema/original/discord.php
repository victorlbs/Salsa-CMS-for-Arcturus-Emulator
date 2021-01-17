<?php
$titulo = "Discord do Habbo Pirata - ".nome."";
include 'header.php';
?>

    <div class="container">
    <div class="row justify-content-md-center">
        
        
        
        <div class="col-md-12">
                <h3 style="color:#1e262c;font-weight: bold;margin-top:0px"> Junte-se ao nosso Discord!</h3>
                <h5 style="color: #a7a7a7;margin-bottom:30px"></h5>
            </div>
            <hr>
            
            
        
    </div>
</div>
    <style type="text/css">
        .salsa {
            height: 300px;
        }
        @import url('https://fonts.googleapis.com/css?family=Montserrat:600,400');
* {outline-width: 0;	font-family: 'Montserrat' !important; user-select: none;}

$img: 'https://images4.alphacoders.com/602/thumb-1920-602788.png';

#container {
	height: 100vh;
	background-size: cover !important;
	display: flex; 
	justify-content: center;
	align-items: center;
}
#inviteContainer {
	display: flex;
	overflow: hidden;
	position: relative;
	border-radius: 5px;
	.acceptContainer {
		padding: 45px 30px;
		box-sizing: border-box;
		width: 400px;
		&:before {
			content: "";
			background-size: cover !important;
			box-shadow: inset 0 0 0 3000px rgba(40,43,48,.75);
			filter: blur(10px);
			position: absolute;
			width: 150%;
			height: 150%;
			top: -50px;
			left: -50px;
		}
	}
}
form {
	padding-bottom: 15px;
	position: relative;
	text-align: center;
	height: 100%;
	h1 {
		margin: 0 0 15px 0;
		font-family: 'Montserrat';
		font-weight: 600;
		font-size: 20px;
		color: #fff;
	}
	.serverInfo {
		display: flex;
		align-items: center;
		justify-content: center;
		.img {
			background: #fff;
			border-radius: 50%;
			width: 32px;
			height: 32px;
			position: relative;
			display: flex;
			justify-content: center;
			align-items: center;
			img {
				width: 75%;
			}
		}
		p {
			padding-left: 10px;
			color: #fff;
			span {
				font-family: 'Montserrat';
				font-weight: 600;
			}
			.by {
				padding-left: 5px;
				font-size: 12px;
				opacity: .7;
			}
			.name {
				padding-left: 5px;
				font-size: 12px;
			}
		}
	}
}
.logoContainer {
	padding: 45px 30px;
	box-sizing: border-box;
	position: relative;
	z-index: 2;
	position: relative;
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	img {
		width: 150px;
		margin-bottom: -5px;
		display: block;
		position: relative;
	}
	.text {
		padding: 25px 0 10px 0;
	}
	&:before {
		content: "";
		background-size: cover !important;
		position: absolute;
		top: -50px;
		left: -50px;
		width: 150%;
		height: 150%;
		filter: blur(10px);
		box-shadow: inset 0 0 0 3000px rgba(255,255,255,0.8);
	}
}
.acceptBtn {
	width: 100%;
	box-sizing: border-box;
	background: #7289DA;
	border: none;
	color: #fff;
	padding: 15px 0;
	border-radius: 3px;
	position: absolute;
	bottom: 0;
	left: 0;
	cursor: pointer;
	transition: 0.2s ease;
	&:hover {
		background: #6B7FC5;
	}
}



















    </style>
    <div class="salsa"></div>
    <div style="font-weight: 14px;background: #1e262c; padding: 10px;border-top: 4px solid #1b2228;margin-top: 30px">
        <div class="container">

            <span style="color:#a7a7a7">
            © 2019 - <?php echo ano ?> Rede <?php echo nome ?> Corporation Ltd. Todos os direitos reservados.
               
                                                    </span>
        </div>
    </div>

    </body>

    </html>