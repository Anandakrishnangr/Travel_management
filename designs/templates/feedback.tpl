
<html>
	<head>
		<title>Feedback</title>

		{literal}

<style>
::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: white;
}

.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #fc03eb;    }
    49%{    color: #03d7fc; }
    60%{    color: #0398fc; }
    99%{    color: #0367fc;  }
    100%{   color: #fc03eb;    }
}

</style>



{/literal}

	</head>
		<body style="background-image: url(web/images/fd.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">
			<br><br><br><br><br><br>
		<center>
		<div style="margin-top: 1vh;background-color: #e6e6e608;width: 40%;padding: 10px;">
		<center><h1 class="blinking" style="font-size: 60px; word-spacing: 100px;">Feedback</h1></center><hr width="45%" size="1" color="black"><br>

		<center><form method="POST" action="" style="min-width: 70%;min-height: 630px;">
			<table >
		
				<input type="hidden" name="hide" value="h">
		
			
			<tr style="font-family: Georgia,serif; font-size: 15px;"><td></td><td style="padding: 10px;"><textarea name="feedback" placeholder="Enter Feedback" style="min-height: 190px;min-width: 250px;padding: 10px;height: 520px;width: 390px;"></textarea></td></tr>

			<tr><td></td><td align="right"><input type="submit" name="submit" placeholder="SUBMIT" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 26px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;border-radius: 12px;"></td></tr>
			</table>
				</form>
		</center>
 		</div>
		</center>
		<br><br>
		</body>
</html>