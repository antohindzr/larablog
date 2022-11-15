<table class="myTable">
<tr>
<td>  
    <div class="mt-10 max-w-xl mx-auto">
    <a class="text-2xl font-bold mb-2">{{ $user->name }}</a>
        <p>E-mail: {!! $user->email !!}</p>
        <p>User ID: {!! $user->id !!}</p>
        <p>Registered: {!! $user->created_at !!}</p>
        <div class="border-b mb-5 pb-5 border-gray-200">
        </div>
</td>
<td colspan="2"></td>
</tr>
<tr>
<td class="cells">
    <div class="mt-10 max-w-xl mx-auto">
    <a class="text-2xl font-bold mb-2">My posts:</a>
        @foreach ($posts as $post)
        <div class="border-b mb-5 pb-5 border-gray-200">
        <a class="text-2xl font-bold mb-2">{{ $post->title }}</a>
            <p>{!! $post->body !!}</p>
            <p>User ID: {!! $post->user_id !!}</p>
            <p>Post ID: {!! $post->post_id !!}</p>
            <p>Posted: {!! $post->created_at !!}</p>
        </div>
        @endforeach
    </div>
</td>  
    
<td class="cells">
    <div class="mt-10 max-w-xl mx-auto">
    <a class="text-2xl font-bold mb-2">My subscriptions:</a>    
            @foreach ($namesubs as $namesub)
            <div class="border-b mb-5 pb-5 border-gray-200">
            <a class="text-2xl font-bold mb-2">{{ $namesub->name }}</a>
            <p>User ID: {!! $namesub->id !!}</p>
            </div>
            @endforeach
            
    </div>
</td>
<td class="cells">
    <div class="mt-10 max-w-xl mx-auto">
    <a class="text-2xl font-bold mb-2">News feed:</a>    
            @foreach ($postsubs as $postsub)
            <div class="border-b mb-5 pb-5 border-gray-200">
            <a class="text-2xl font-bold mb-2">{{ $postsub->name }} - </a>
            <a class="text-2xl font-bold mb-2">{{ $postsub->title }}</a>
                <p>{!! $postsub->body !!}</p>
                <p>User ID: {!! $postsub->user_id !!}</p>
                <p>Post ID: {!! $postsub->post_id !!}</p>
                <p>Posted: {!! $postsub->created_at !!}</p>
                </div>
            @endforeach 
    </div>
</td>
</table>
<style>
    .myTable {
        width: 90%;
        vertical-align: top;
        }
        td.cells {
        vertical-align: top;
        }
</style>