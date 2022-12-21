@extends('layouts.main')
@section('content')
     <div class="contaier">
          <div class="row justify-content-center">
               <div class="col-md-8">
                    <div class="card">
                         <div class="card-header">Book Details</div>
                         <div class="card-body">
                              <table class="table table-stribed">
                                   <tr>
                                        <th>Title</th>
                                        <td class="lead"><b>{{ $book->title }}</b></td>
                                   </tr>
                                   @if ($book->isbn)
                                        <tr>
                                             <th>ISBN</th>
                                             <td>{{ $book->isbn }}</td>
                                        </tr>
                                   @endif
                                   <tr>
                                        <th>Book Cover</th>
                                        <td><img class="img-fluid img-thumbnail"
                                                  src="{{ asset('storage/' . $book->cover_image) }}"
                                                  alt="{{ $book->title }}"></td>
                                   </tr>
                                   @if ($book->category)
                                        <tr>
                                             <th>Category</th>
                                             <td>{{ $book->category->name }}</td>
                                        </tr>
                                   @endif
                                   @if ($book->authors()->count() > 0)
                                        <tr>
                                             <th>Authors</th>
                                             <td>
                                                  @foreach ($book->authors as $author)
                                                       {{ $loop->first ? '' : ', ' }}
                                                       {{ $author->name }}
                                                  @endforeach
                                             </td>
                                        </tr>
                                   @endif
                                   @if ($book->publisher)
                                        <tr>
                                             <th>Publisher</th>
                                             <td>{{ $book->publisher->name }}</td>
                                        </tr>
                                   @endif
                                   @if ($book->description)
                                        <tr>
                                             <th>Description</th>
                                             <td>{{ $book->description }}</td>
                                        </tr>
                                   @endif
                                   @if ($book->publish_year)
                                        <tr>
                                             <th>Publish Year</th>
                                             <td>{{ $book->publish_year }}</td>
                                        </tr>
                                   @endif
                                   <tr>
                                        <th>Number of Pages</th>
                                        <td>{{ $book->number_of_pages }}</td>
                                   </tr>
                                   <tr>
                                        <th>Number of Copies</th>
                                        <td>{{ $book->number_of_copies }}</td>
                                   </tr>
                                   <tr>
                                    <th>Price</th>
                                    <td>{{ $book->price }} $</td>
                                   </tr>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
