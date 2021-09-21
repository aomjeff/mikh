																																																																																																						<?php
    if($getsprice == "10000"){ $bgcolor = "#2962FF"; $tcolor = "#31F5A3";} 
    elseif($getsprice == "20000"){ $bgcolor = "#00BFA5"; $tcolor = "#31F5A3";}
    elseif($getsprice == "50000"){ $bgcolor = "#FF6D00"; $tcolor = "#31F5A3";} 
    elseif($getsprice == "200000"){ $bgcolor = "#DD2C00"; $tcolor = "#31F5A3";}
    // else color
    else{ $bgcolor = "#04BF9D";}
    if($datalimit == ""){$datalimit = "Illimité";}else{$datalimit = $datalimit;}
    if($timelimit == ""){$timelimit = "Illimité";}else{$timelimit = $timelimit;}
    ?>
<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <title>Les vouchers de ST PAUL
        </title>
        <style type="text/css">
            .rotate {
            vertical-align: bottom;
            text-align: center;
            }
            .rotate span {
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: rotate(360deg);
            white-space: nowrap;
            }
            .bgwhite{
            -webkit-print-color-adjust: exact;
            background-color: #fff;
            color:#000;
            }
            .fontID{
            font-size : 18px;
            }
            @page {
            size: A4;
            margin-top: 0,75in; 
              margin-bottom: 0,75in;
              border-top: 1pt solid black;
              padding: 0,25in 0in 0in 0in;
				@bottom-right {
            content: counter(page) "sur" counter(pages);
        }
            }
			@page:left{
              margin-left: 0,5in;
              margin-right: 0,75in;
              @top-left{
                content: counter(page);
                text-align: left;
                vertical-align: bottom;
                background-color: red;
              }
              @top-right {
                background-color: blue;
                text-align: right;
                vertical-align: bottom;
              }
            }
            @page:right{
              margin-left: 0,75in;
              margin-right: 0,5in;
              @top-right{
                content: counter(chapternumber);
                text-align: right;
                vertical-align: bottom
              }
            }
            @page: first{
              @top-left{
                counter: normal;
              }
            }
            @page chapter{
              background-color: lightgray;
            }
           section[data-type="chapter"] {
              counter-increment: chapternumber;
              page-break-before: right;
              page: chapter;
            }
            body{
            font-family: Raleway;
			margin: 0;
            counter-reset: chapternumber;
            }
        </style>
		        
    </head>
    <body>
		<table class="voucher border" bgcolor="<?= $bgcolor;?>" style="border-left:solid 2px <?= $bgcolor;?>; border-right:solid 2px <?= $bgcolor;?>; border-top:0px; border-bottom:0px; width: 245px; color:#fff; text-align: center; -webkit-print-color-adjust: exact;">
			<tbody>
				<tr>
					<td colspan="2" style="font-weight:bold;">ST PAUL WIFI TICKET
					</td>
					<td class="rotate bgwhite" rowspan="8" style="vertical-align: top; font-size:20px; font-wight:bold; padding-top:20px; border-left:solid 2px <?= $bgcolor;?>;">
						<span style="color: <?= $tcolor;?>">
							<?= $price;?>
						</span>
					</td>
				</tr>
				<tr>
					<td class="bgwhite" >FORFAIT
					</td>
					<td class="bgwhite" >
						<?= $getuprofile;?>
					</td>
				</tr>
				<tr>
					<td class="bgwhite" >QUOTA
					</td>
					<td class="bgwhite" >
						<?= $datalimit;?>
					</td>
				</tr>
				<tr>
					<td class="bgwhite" >TEMPS
					</td>
					<td class="bgwhite" >
						<?= $timelimit;?>
					</td>
				</tr>
				<tr>
					<td class="bgwhite" >VALIDITE
					</td>
					<td class="bgwhite" >
						<?= $validity;?>
					</td>
				</tr>
				<?php if($usermode == "vc"){?>
				<tr>
					<td colspan="2" style="font-size:12px; font-weight: bold;">ID.VOUCHER
					</td>
				</tr>
				<tr>
					<td colspan="2" class="bgwhite fontID" >
						<?= $username;?>
					</td>
				</tr>
				<?php }elseif($usermode == "up"){?>
				<tr>
					<td style="font-size:12px; font-weight: bold;">USERNAME
					</td>
					<td style="font-size:12px; font-weight: bold;">PASSWORD
					</td>
				</tr>
				<tr>
					<td class="bgwhite fontID" style="font-family:Open sans;">
						<?= $username;?>
					</td>
					<td class="bgwhite fontID" style="font-family:Open sans;">
						<?= $password;?>
					</td>
				</tr>
				<?php }?>	
				<tr>
					<td colspan="2" style="width: 100%;">
						<table style="width: 100%;">
							<tr>
								<td style="font-size:12px; text-align: left;"> contact : (+228) <br>987 766 82
								</td>
								<td style="font-size:12px; text-align: right;">login : 
									<?= $dnsname; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
    </body>
</html>
<!-- ################## template end here -->	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        