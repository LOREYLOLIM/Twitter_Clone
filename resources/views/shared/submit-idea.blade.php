<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('twitter.create') }}" method="post">
        @csrf
    <div class="mb-3">
        <textarea id="twitter" name="twitter" class="form-control" rows="3"></textarea>
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>
