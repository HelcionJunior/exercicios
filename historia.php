<form action= "historia2.php" method="POST">
<label><h3>Nome Completo</h3></label>
<input type= "text" name="nome"/><br><br>
<label><h3>Turno</h3></label>
<input type= "radio" name="turno" value="manhã"/>Manhã<br>
<input type= "radio" name="turno" value="tarde"/>Tarde<br>
<input type= "radio" name="turno" value="noite"/>Noite<br><br>


<label>Matérias</label><br>
<select name="materias[]" id=""size ="3" multiple><br>
<option value= "M">matemática</option>
<option value= "P">português</option>
<option value= "H">história</option>
<option value= "G">geografia</option>
<option value= "I">inglês</option>
<option value= "Q">química</option><br>
</select><br><br>

<label>história</label><br>
<textarea name="historia" rows="5" cols="40"></textarea><br>

<input type= "submit" value= "Enviar"/>


</form>