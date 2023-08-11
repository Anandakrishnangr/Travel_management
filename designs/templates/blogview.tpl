
<br><br><br><br>
{foreach from=$view item="s"}
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{$s.pathpic}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <span class="text-serif text-primary">{$s.place}</span>
            <h3 class="heading-92913 text-black">{$s.date}</h3>
            <p>{$s.content}</p>
            
          </div>
        </div>
      </div>
    </div>
    {/foreach}
    </div>
    
 <form method="POST" action="">


    <div>
      Comment<br>
      <textarea name="comment" placeholder="comment here"></textarea>
      <input type="submit" value="POST">
{foreach from=$view1 item="e"}
<p>{$e.username}  {$e.date}</p>
<p>{$e.comment}</p>
    {/foreach}
    </div>

   </form>