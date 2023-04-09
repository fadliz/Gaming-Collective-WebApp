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
                <h3 style='font-weight : 700;'>Edit Forum</h3>
            </div>
            <form action="/editingForum/{{$post->id}}" method="post">
                @csrf
                <div class="post-question py-5">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Edit Question</label>
                                <div class="input-group mb-3 mt-2">
                                    <input name="userid" id="userid" type="hidden" value="{{auth()->user()->id}}">
                                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                    <select class="form-select" id="kategori" name="kategori">
                                    <option selected value="{{$post->Category->id}}">{{$post->Category->nama}}</option>
                                    <option value="1">Video games</option>
                                    <option value="2">Gaming gear</option>
                                    <option value="3">Other</option>
                                    </select>
                                </div>
                                <textarea class="form-control my-3" id="question" name="question" rows="3">{{old('question',$post->question)}}</textarea>
                            </div>
                            <button type="submit">Submit</button>
                            
                        </div>
                    </div>
                </div>
            </form>
            <a href="/Forum"><button class="button button5">Cancel</button></a>
        

        <script src="/forum.js" charset="utf-8"></script>
    @endsection

</body>

</html>