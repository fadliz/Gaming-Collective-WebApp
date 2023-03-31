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
            <div class="post-question py-5">
                <div class="card">
                    <div class="card-header">
                        <img src="image/default.png" alt="" width="36" height="36" class="rounded-circle me-2" />
                        syamaidzardn
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ask a Question</label>
                            <div class="input-group mb-3 mt-2">
                                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                <select class="form-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  <option value="1">Video games</option>
                                  <option value="2">Gaming gear</option>
                                  <option value="3">Other</option>
                                </select>
                              </div>
                            <textarea class="form-control my-3" id="exampleFormControlTextarea1" rows="3" placeholder="Write the text here..."></textarea>
                          </div>
                          <a href="" class="button3" >Add question</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="question-list py-5">
                <div class="comment-thread">
                    <!-- Comment 1 start -->
                    <div class="comment" id="comment-1">
                        <a href="#comment-1" class="comment-border-link">
                            <span class="sr-only">Jump to comment-1</span>
                        </a>
                        <div class="comment-heading">
                            <div class="card-header">
                                <img src="image/default.png" alt="" width="36" height="36" class="rounded-circle me-2" />
                            </div>
                            <div class="comment-info">
                                <a href="#" class="comment-author">someguy14</a>
                                <p class="m-0">
                                    Video games &bull; 4 days ago
                                </p>
                            </div>
                        </div>
                        <div class="comment-body">
                            <p>
                                This is really great! I fully agree with what you wrote, and this is sure to help me out in the future. Thank you for posting this.
                            </p>
                            <button type="button" data-toggle="reply-form" data-target="comment-1-reply-form">Reply</button>
                            
                
                            <!-- Reply form start -->
                            <form method="POST" class="reply-form d-none" id="comment-1-reply-form">
                                <textarea placeholder="Reply to comment" rows="4"></textarea>
                                <button type="submit">Submit</button>
                                <button type="button" data-toggle="reply-form" data-target="comment-1-reply-form">Cancel</button>
                            </form>
                            <!-- Reply form end -->
                        </div>
                
                        <div class="replies">
                            <!-- Comment 2 start -->
                            <details open class="comment" id="comment-2">
                                <a href="#comment-2" class="comment-border-link">
                                    <span class="sr-only">Jump to comment-2</span>
                                </a>
                                <summary>
                                    <div class="comment-heading">
                                        <div class="card-header">
                                            <img src="image/default.png" alt="" width="36" height="36" class="rounded-circle me-2" />
                                        </div>
                                        <div class="comment-info">
                                            <a href="#" class="comment-author">randomperson81</a>
                                            <p class="m-0">
                                                Video games &bull; 3 days ago
                                            </p>
                                        </div>
                                    </div>
                                </summary>
                
                                <div class="comment-body">
                                    <p>
                                        Took the words right out of my mouth!
                                    </p>
                                    <button type="button" data-toggle="reply-form" data-target="comment-2-reply-form">Reply</button>
                                    
                
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
                
                            <a href="#load-more">Load more replies</a>
                        </div>
                    </div>
                    <!-- Comment 1 end -->
                </div>
            </div>
        

        <script src="/forum.js" charset="utf-8"></script>
    @endsection

</body>

</html>