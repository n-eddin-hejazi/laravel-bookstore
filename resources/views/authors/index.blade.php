@extends('layouts.main')
@section('content')
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-md-8">
                    <div class="card">
                         <div class="card-header">Authors</div>
                         <div class="card-body">
                              <div class="row justify-content-center">
                                   <form action="{{ route('gallery.authors.search') }}" method="GET">
                                        <div class="row d-flex justify-content-center">
                                             <input type="text" name="term" placeholder="Search a book..."
                                                  class="col-3 mx-sm-3 mb-2">
                                             <button type="submit"
                                                  class="col-2 btn btn-secondary bg-secondary mb-2">Search</button>
                                        </div>
                                   </form>
                              </div>
                              <hr>
                         </div>

                         <h3 class="mb-4 ml-3">{{ $title }}</h3>
                         @if ($authors->count())
                              <ul class="list-group p-3 border-0">
                                   @foreach ($authors as $author)
                                        <a href="{{ route('gallery.authors.show', $author) }}"
                                             style="color:grey;  text-decoration: none;">
                                             <li class="list-group-item">
                                                  {{ $author->name }} ({{ $author->books->count() }})
                                             </li>
                                        </a>
                                   @endforeach
                              </ul>
                         @else
                              <div class="p-3">
                                   <div class="col-12 mt-4 mx-auto text-center alert alert-info" role="alert">No results.
                                   </div>
                              </div>
                         @endif
                    </div>
               </div>
          </div>
     </div>
@endsection
