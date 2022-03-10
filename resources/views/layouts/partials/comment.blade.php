@if ($children->comments->where('status', 'approved')->count() > 0)
    <li>
        <div class="row" id="{{ $children->id }}">
            <div class="col-auto pr-2">
                <img class="rounded" alt="" src="images/blog/user-2.jpg">
            </div>
            <div class="col">
                <h6>
                    <a class="float-right text-2 text-muted btn-link" href="javascript:void(0)"
                        onclick="addCommentForm({{ $children->id }})">
                        <span class="mr-1">
                            <i class="fas fa-reply-all"></i></span>
                        Reply
                    </a>
                    {{ optional($children->user)->name }}
                    <span class="text-muted text-2 font-weight-400 d-block d-sm-inline-block mt-2 mt-sm-0">
                        <em>{{ $children->updated_at->format('M d Y') }}</em>
                        {{-- @if (auth()->user()->id == $children->user->id)
                            <button class="btn btn-link  py-0 px-1 mx-1 btn-sm"
                                onclick="editComment({{ $children->id }})">Edit</button>
                        @endif --}}
                    </span>
                </h6>
                <p class="mb-0">{{ $children->body }}</p>
            </div>
        </div>
        <ul>
            @foreach ($children->comments->where('status', 'approved') as $comment)
                @include('layouts.partials.comment', [
                    'children' => $comment,
                ])
            @endforeach
        </ul>
    </li>
@else
    <li>
        <div class="row" id="{{ $children->id }}">
            <div class="col-auto pr-2"> <img class="rounded" alt="" src="images/blog/user-2.jpg"> </div>
            <div class="col">
                <h6>
                    <a class="float-right text-2 text-muted btn-link" href="javascript:void(0)"
                        onclick="addCommentForm({{ $children->id }})">
                        <span class="mr-1">
                            <i class="fas fa-reply-all"></i>
                        </span>
                        Reply
                    </a>
                    {{ optional($children->user)->name }}
                    <span class="text-muted text-2 font-weight-400 d-block d-sm-inline-block mt-2 mt-sm-0">
                        <em>{{ $children->updated_at->format('M d Y') }}</em>

                        {{-- @if (auth()->user()->id == $children->user->id)
                            <button class="btn btn-link  py-0 px-1 mx-1 btn-sm"
                                onclick="editComment({{ $children->id }})">Edit</button>
                        @endif --}}
                    </span>
                </h6>
                <p class="mb-0">{{ $children->body }}</p>
            </div>
        </div>
    </li>
@endif

@push('scripts')
    <script type="text/javascript">
        function addCommentForm(commentable_id) {
            $('.comment-reply-form').remove();
            $('div#' + commentable_id).append(
                `<div class="comment-reply-form">
                        <hr class="my-4">
                        <h5 class="mb-4 mt-3">Reply this comment</h5>
                        <form method="post" action="{{ route('comment-post') }}">
                            @csrf
                            <input type="hidden" name="commentable_id" value="${commentable_id}" />
                            <input type="hidden" name="commentable_type" value="App\\Models\\Comment" />
                            <div class="row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="yourName">Name</label>
                                    <input type="text" class="form-control" id="yourName" required
                                        aria-describedby="yourName" placeholder="Your Name" name="name"
                                        value="{{ optional(auth()->user())->name }}" @auth readonly @endauth />
                                </div>
                                <div class="form-group col-12 col-md-8">
                                    <label for="yourEmail">Email</label>
                                    <input type="email" class="form-control" id="yourEmail" required
                                        aria-describedby="yourName" placeholder="Your Email" name="email"
                                        value="{{ optional(auth()->user())->email }}" @auth readonly @endauth>
                                </div>
                                <div class="form-group col-12">
                                    <label for="yourComment">Your Reply</label>
                                    <textarea class="form-control" rows="4" id="yourComment" required
                                        placeholder="Your reply" name="body"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>`
            );
        }
    </script>
@endpush
