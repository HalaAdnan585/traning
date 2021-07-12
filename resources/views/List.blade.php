<h4>{{$teacher->Name}} </h4>

<table>
<th> Students Name :</th>
<td> 
@foreach ($students as $stu)
    <td>{{$stu->name}} </td>
    <br>
@endforeach

</td>
</table>