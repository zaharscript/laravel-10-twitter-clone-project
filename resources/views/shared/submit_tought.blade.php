<h4> Speak your mind </h4>
<div class="row">
    <form action="{{ route('thought.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="tought" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
