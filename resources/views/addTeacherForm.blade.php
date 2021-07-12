<form action ="/first" method ="post">
{{csrf_field()}}
<label> id's: </label> <input id="id" name="id" type="text"/>
<br>
<label> Name: </label> <input id="Name" name="Name" type="text"/>
<br>
 <input value="Add" type="submit" />
</form>