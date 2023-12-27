@extends('layouts.master')
@section('page_title', 'Comments')
@section('content')

<html>
    <head>
        <style>
            body {
                background-color: cream;
                font-family: Arial, sans-serif;
            }

            .container {
                max-width: 1000px;
                height: 500px;
                margin: 0 auto;
                padding: 20px;
                background-color: white;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                display: flex;
            }

            .comments-container {
                flex: 1;
                margin-right: 20px;
            }

            .leave-comment-container {
                flex: 1;
            }

            .comments {
                margin-bottom: 20px;
                max-height: 300px;
                overflow-y: scroll;
                padding-right: 20px;
            }

            .comment-item {
                margin-bottom: 10px;
                background-color: #fff;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }

            h2 {
                color: darkblue;
                margin-top: 0;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            label {
                display: block;
                margin-bottom: 5px;
                color: darkblue;
                font-weight: bold;
            }

            input[type="text"],
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
                resize: none;
            }

            button[type="submit"] {
                background-color: crimson;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .alert {
                padding: 10px;
                margin-bottom: 10px;
                border-radius: 5px;
            }

            .alert-success {
                background-color: lightgreen;
                color: #333;
            }

            .alert-danger {
                background-color: tomato;
                color: #fff;
            }

            .scroll-btn {
                display: block;
                margin-top: 10px;
                background-color: darkblue;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .scroll-btn:hover {
                background-color: #004080;
            }
        </style>

        <script>
            // Inline JavaScript code
            // You can write your JavaScript code here
            // For example, you can add event listeners or perform AJAX requests

            // Example: Submit form using AJAX
            const form = document.querySelector('form');
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                const formData = new FormData(form);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', form.action);
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        // Handle success response
                        console.log(xhr.responseText);
                    } else {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                };
                xhr.send(formData);
            });
        </script>
    </head>

    <body>
        <div class="container">
            <div class="comments-container">
                <!-- Display existing comments -->


                @if(Auth::user()->user_type == 'super_admin')
                <h2>Comments</h2>
                <div class="comments">
                    <ul>
                        @foreach ($comments as $index => $comment)
                        <li class="comment-item row justify-content-between">
                            <div class='col-md-6'>
                            <strong>{{ $comment->user->name }}</strong>
                            <p>{{ $comment->comment }}</p>
                            </div>
                            <div class="list-icons col-auto">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a id="{{ $comment->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                        <form method="post" id="item-delete-{{ $comment->id }}" action="{{ route('comments.destroy', $comment->id) }}" class="hidden">@csrf @method('delete')</form>
                                            {{-- @endif --}}

                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <button class="scroll-btn" onclick="scrollComments()">View More</button>



                @else
                <h2>Previous Comments</h2>
                <div class="comments">
                    <ul>
                        @foreach ($comments as $index => $comment)
                        <li class="comment-item">
                            <strong>{{ $comment->user->name }}</strong>
                            <p>{{ $comment->comment }}</p>
                        </li>
                        @endforeach
                    </ul></div>
                @endif
            </div>
            <div class="leave-comment-container">
                <!-- Comment form -->
                <h2>Leave a Comment</h2>
                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <div>
                        <label for="comment">Comment</label>
                        <textarea name="comment" id="comment" required></textarea>
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <script>

            function scrollComments() {
                const commentsContainer = document.querySelector('.comments');
                commentsContainer.scrollTop = commentsContainer.scrollHeight;
            }
        </script>
    </body>
</html>


@endsection
