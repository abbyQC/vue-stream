<reply :attributes="{{$reply}}" inline-template v-cloak>
    <div id="reply-{{$reply->id}}" class="panel panel-default">
        <div class="panel-heading">
            <div class="level">
                <h5 class="flex">
                    <a href="{{route('profile', $reply->owner)}}">
                        {{$reply->owner->name}}
                    </a>
                    said {{$reply->created_at->diffForHumans()}}..

                </h5>
                <favorite :reply="{{$reply}}"></favorite>

            </div>
        </div>

        <div class="panel-body">
            <div v-if="editing">
                <div class="form-group">
                    <textarea class="form-control" v-model="body"></textarea>
                </div>
            </div>
        </div>
    </div>