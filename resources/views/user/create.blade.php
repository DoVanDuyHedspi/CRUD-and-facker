@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            <form method="post" action="{{url('/create/ticket')}}">
                <div class="form-group">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <label for="title">Ticket Title:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="description">Ticket Description:</label>
                    <textarea cols="5" rows="5" class="form-control" name="description" id="description"># Intro
Go ahead, play around with the editor! Be sure to check out **bold** and *italic* styling, or even [links](https://google.com). You can type the Markdown syntax, use the toolbar, or use shortcuts like `cmd-b` or `ctrl-b`.

## Lists
Unordered lists can be started using the toolbar or by typing `* `, `- `, or `+ `. Ordered lists can be started by typing `1. `.

#### Unordered
* Lists are a piece of cake
* They even auto continue as you type
* A double enter will end them
* Tabs and shift-tabs work too

#### Ordered
1. Numbered lists...
2. ...work too!
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

    <script>
        var simplemde = new SimpleMDE({element:document.getElementById("description"),
            spellChecker: false
        });
    </script>

@endsection