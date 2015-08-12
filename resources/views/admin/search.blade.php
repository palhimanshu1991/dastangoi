@foreach($movies as $movie)   
<tr>
   <th scope="row"><a target="_blank" href="./movie/{{$movie['id']}}">{{$movie['id']}}</a></th>
   <td> <a href="./admin/{{$movie['id']}}"> {{$movie['title']}}</a></td>
   <td><a href="http://localhost/moviebar/public/admin/update-movie?movie={{$movie['id']}}}">Update</a></td>
</tr>
@endforeach   