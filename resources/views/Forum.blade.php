<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/forum.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
    <title>Gative - Game Collective</title>
</head>

<body>
    @extends('Sidebar') 
    @section('content')
        <div class="back ps-5 pt-5">
            <a href="#"><span><i class='bx bx-chevron-left' ></i></span>Back</a>

        </div>
        
        <div class="forum-container p-5">
            <div class="top-forum">
                <h3 style='font-weight : 700;'>Forum</h3>
                <div class="search-container">
                    <input type="text" placeholder="Search Forum..." />
                    <button type="submit">
                        <i class='bx bx-search'></i>
                    </button>
                </div>
            </div>
            <form action="/Forum" method="post">
                @csrf
                <div class="post-question py-5">
                    <div class="card">
                        <div class="card-header">
                            <img src="storage/{{auth()->user()->profile}}" alt="" width="36" height="36" class="rounded-circle me-2" />
                            {{auth()->user()->username}}
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Ask a Question</label>
                                <div class="input-group mb-3 mt-2">
                                    <input name="userid" id="userid" type="hidden" value="{{auth()->user()->id}}">
                                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                    <select class="form-select" id="kategori" name="kategori">
                                    <option selected>Choose...</option>
                                    <option value="1">Video games</option>
                                    <option value="2">Gaming gear</option>
                                    <option value="3">Other</option>
                                    </select>
                                </div>
                                <textarea class="form-control my-3" id="question" name="question" rows="3" placeholder="Write the text here..."></textarea>
                            </div>
                            <input type="submit" value="Add Question">
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            @foreach ($post as $item)
            <!-- Reply form start -->
            <form action="/reply" method="POST" class="reply-form d-none" id="comment-1-reply-form">
                @csrf
                <input name="userid" id="userid" type="hidden" value="{{auth()->user()->id}}">
                <input name="postid" id="postid" type="hidden" value="{{$item->id}}">
                <textarea name="reply" id="reply" placeholder="Reply to comment" rows="4"></textarea>
                <button type="submit">Submit</button>
                <button type="button" data-toggle="reply-form" data-target="comment-1-reply-form">Cancel</button>
            </form>
            <!-- Reply form end -->
            
            <div class="question-list py-5">
                <div class="comment-thread mb-3">
                    <!-- Comment 1 start -->
                    <div class="comment" id="comment-1">
                        <a href="#comment-1" class="comment-border-link">
                            <span class="sr-only">Jump to comment-1</span>
                        </a>
                        <div class="comment-heading">
                            <div class="card-header">
                                <img src="storage/{{$item->user->profile}}" alt="" width="36" height="36" class="rounded-circle me-2" />
                            </div>
                            <div class="comment-info">
                                <a href="#" class="comment-author">{{$item->User->username}}</a>
                                <p class="m-0">
                                    {{$item->Category->nama}} &bull; {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                </p>
                            </div>
                            @if (auth()->user()->id == $item->User_id)
                            <a class="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-vertical-rounded' style='font-size: 16px; float: right; width: 100%;'></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Edit post</a></li>
                              <li><a class="dropdown-item" href="#" style="color : #ff1f57;">Delete post</a></li>
                            </ul>
                            @endif
                        </div>
                        <div class="comment-body">
                            <p>
                                {{$item->question}}
                            </p>
                            <button onclick="topFunction()" type="button" data-toggle="reply-form" data-target="comment-1-reply-form">Reply</button>
                            
                
                            
                        </div>
                        @foreach ($item->replies as $bales)
                            
                        <div class="replies">
                            <!-- Comment 2 start -->
                            <details open class="comment" id="comment-2">
                                <a href="#comment-2" class="comment-border-link">
                                    <span class="sr-only">Jump to comment-2</span>
                                </a>
                                <summary>
                                    <div class="comment-heading">
                                        <div class="card-header">
                                            <img src="storage/{{$bales->user->profile}}" alt="" width="36" height="36" class="rounded-circle me-2" />
                                        </div>
                                        <div class="comment-info">
                                            <a href="#" class="comment-author">{{$bales->user->username}}</a>
                                            <p class="m-0">
                                                {{$bales->forum->Category->nama}} &bull; {{ \Carbon\Carbon::parse($bales->created_at)->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                </summary>
                
                                <div class="comment-body">
                                    <p>
                                        {{$bales->answers}}
                                    </p>
                                    
                
                                    <!-- Reply form start -->
                                    <form method="POST" class="reply-form d-none" id="comment-2-reply-form">
                                        <textarea placeholder="Reply to comment" rows="4"></textarea>
                                        <button type="submit">Submit</button>
                                        <button type="button" data-toggle="reply-form" data-target="comment-2-reply-form">Cancel</button>
                                    </form>
                                    <!-- Reply form end -->
                                </div>
                            </details>
                            <!-- Comment 2 end -->
                
                        </div>

                        @endforeach
                    </div>
                    <!-- Comment 1 end -->
                </div>

            </div>

            @endforeach
        
            <script>
                // Ketika pengguna menggulir ke bawah 20px dari atas dokumen, tombol akan muncul
                window.onscroll = function() {scrollFunction()};
                
                function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                  } else {
                    document.getElementById("myBtn").style.display = "none";
                  }
                }
                
                // Ketika pengguna mengklik tombol, gulir ke atas
                function topFunction() {
                  document.body.scrollTop = 0; // Untuk Safari
                  document.documentElement.scrollTop = 0; // Untuk Chrome, Firefox, IE dan Opera
                }
                </script>
        <script src="/forum.js" charset="utf-8"></script>
    @endsection

</body>

</html>