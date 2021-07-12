<form action ="/register" method ="post">
{{csrf_field()}}
<label> email: </label> <input id="email" name="email" type="email"/>
<br>
<label> userName: </label> <input id="name" name="name" type="text"required/>
<br>
<label> password: </label> <input id="password" name="password" type="password"/>
<br>
<label> place: </label> <input id="place" name="place" type="text"/>
<br>
<label> mobile: </label> <input id="mobile" name="mobile" type="text"/>
<br>
<label> privilige: </label> <input id="privilige" name="privilige" type="text"/>
<br>
 <input value="Add" type="submit" />
</form>
