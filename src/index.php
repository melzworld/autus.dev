<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="The best scoring page Romel has ever made.">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Autus.Dev</title>
  </head>
  <header>
    <a href="/"><img alt="Autus.Dev logo" src ="images/logo.PNG"></a>
    <nav>
      <ul style="padding: 0; padding-bottom: 0; margin-left: 0; margin-bottom: 0">
        <li><a href="/">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="clients.html">Clients</a></li>
        <li><a href="resume.html">Resume</a></li>
      </ul>
    </nav>
  </header>
  <body>
    <section> 
      <h1>Latest News</h1>
    </section>
    <hr>
    <article>
    <h2>5/8/2019</h2> 
    <h3>DIE IN A FIRE STACKED OVERFLOW!</h3>
      <p>Remember that thing I did last night?  I was right.  It was a TERRIBLE idea.  According to Anthony I done screwed<br>
        up my default settings, and nothing worked right.  Please see this fun exchange:<br>
        <br>
        <img alt="Snip of a conversation where Anthony shits on Stacked Overflow" src ="images/snips/overflowsucks.png"></a><br>
        <br>
        Moral of the story.  NEVER EVER EVER EVER use Stacked Overflow for any type of help whatsoever.<br>
        Also ESC then SHIFT + Z Z to save in VIM<br>
      </p>
    </article>
    <article>
      <h2>5/7/2019</h2> 
      <h3>Busy at work + setting up MYSQL</h3>
        <p>I haven't really been able to do any updates/logs to this for the last 4 days, mostly because I don't touch <br>
          this site on the weekends, and my last couple work days have been a little busy, not to mention my anniversary<br>
          was today.  That being said, the last thing I was working on before I had to stop working was setting up MYSQL<br>
          because I think I have enough content to start connecting this to a database.  By last Friday, I had setup most<br>
          of it, but I didn't know what to do next.  Then when I tried to follow the instructions on 
          <a href="https://www.digitalocean.com/community/tutorials/how-to-install-the-latest-mysql-on-ubuntu-18-04" target="_blank">THIS</a> 
          page, that's when<br>
          I realized I couldn't log into root.  That was frustrating, so I tried contacting Anthony, but he was unavailabe<br>
          so I did what any hot blooded American would do.... I googled it, and I got this solution:<br> 
          <a href="https://stackoverflow.com/questions/41645309/mysql-error-access-denied-for-user-rootlocalhost" target="_blank">
          <img alt="Snip of a webpage showing me a MYSQL root password fix" src ="images/snips/mysqlsolution.png"></a> <br>
          I'm almost 100% positive Anthony will look down on this choice, but WHAT AM I SUPPOSED TO DO WHEN YOU AREN'T<br>
          AVAILABLE?? FEND FOR MYSELF?  I WOULD DIE.<br>
        </p>
      </article>
    <article>
    <h2>5/3/2019</h2> 
    <h3>FLEX BABY</h3>
      <p>So I did a navigation Tutorial and googled a bunch of different CSS Menu Navigation things, and I got some neato <br>
        designs.  So I tried both a vertical and a horizontal menu style with hover effects, and for the most part things <br>
        looked pretty good.  But then Anthony told me to look into Flexbox, and I totally got scared pumped.  But after <br>
        getting a better understanding of selectors, I was able to fix my flex so that the nav stretches across the screen<br>
      </p>
    </article>
    <article>
    <h2>5/2/2019</h2> 
    <h3>Nothing new.  But blogging because Anthony said I should.</h3>
      <p>Of course I can't work on my site because there's a host of activity at work.  I'm trying to think of anything<br>
      I've learned in the last couple days.  Primarily I've been trying to read up on Dockerization and Kubernetes Cluster<br>
      Still would like to understand in a practical application how that all works, but DO(Digital Ocean) prices to setup<br>
      something like that is pricey.  So hopefully when we spin up our dev sandbox here at work, I can get some type of <br>
      access to it.  I guess the next thing I want to do is make this site LESS ugly, so I need to continue to learn CSS<br>
      I do wish there was a more hands on way to dive into it, but whatevs.  Oh, also, "TYPESCRIPT IS A GAMECHANGER" LOL</p>
    </article>
    <article>
    <h2>4/30/2019</h2> 
    <h3>A BORING ASS UPDATE</h3>
      <p>Today I was able to do some housekeeping on the site.  Updated all the html files with the neato stuff on the<br>
      news.html file.  But then I realized that my index was really bare, and I'd rather have the news there.  So I <br>
      nixed the news.html file and made sure all of the cool meta data stuff was updated on all the other files. I also<br>
      added a favicon to the mix, because that's the type of person I am.  That's the type of priorities I keep.  Then<br>
      I decided to fatten out the other menu items so they weren't SO barren.  Oh yeah, and I also redid the blog post<br>
      order so it was newest first, going to oldest. Finally, I got permission on high to start looking into adding<br>
      css to this.  But then I started reading the documentation and I hate it. Waaaaaaah</p>
    </article>
    <article>
    <h2>4/29/2019</h2> 
    <h3>How to rename a branch in BitBucket</h3>
      <p>So in a bold move of courage, I dug deep within and found the strength to rename the primary dev branch for<br>
      the Work Website.  Long story short, you branch off the old branches to a new one locally, then push that<br>
      up to the BitBucket repo, and then from there, you physically delete the old branches via site.  Lastly, if you<br>
      want to, you can then delete your local branches.  Pretty sick huh? *SHINGGGGGGGGGGGGGGGGGG!*<br>
      <img alt="Bitbucket conversation for renaming branches" src ="images/snips/gitrename.png"> <br>
      In other news, I failed miserably at following Anthony's instructions on how to start a webserver:  So first here<br>
      is the link to the <a href="https://gist.github.com/mrajo/c1959f76610ecadf851792ba05f2a2bd" target="_blank">guide</a><br>
        <ul>
        <li>So number 1: I did NOT go to Google Domains and set the NS Records, because I THOUGHT I HAD DONE THAT, but I had <br>
        to revert it in order to get my e-mails in order, but then I never came back and updated it. (According to Anthony <br>
        he says I am a FUCK BREATH)</li>
        <li>So number 2: The Token Generated Dashboard.  So, on step "Configure automatic HTTP cert challenge" I was instructed<br>
        on step one to generate a token for "CADDY-DNS", which I did, but then the instruction on step 4 told me to change<br>
        a line to include this: Environment=CADDYPATH=/etc/ssl/caddy DO_AUTH_TOKEN=&lt;token generated from dashboard&gt; so I did<br>
        EXACTLY WHAT IT SAID, and wrote &lt;token generated from dashboard&gt; instead of the actual token which was generated</li>
        <li>Then number 3: I somehow skipped a step (Install Caddy 7.2) where I didn't change ownership. </li>
        <li>Lastly (number 4) I did a typo in my Caddyfile which directed to audtus.dev instead of autus.dev</li>
        <li>Finally, for extra credit, it turns out my index.html was wrong.  So jesus, kill me already</li>
        </ul>
      </p>
    </article>
    <article>
    <h2>4/26/2019</h2> 
    <h3>AM I STARTING TO GET GIT?</h3>
      <p>As I was driving to work, I suddenly came to the conclusion I didn't need to ever LEAVE the public folder.<br>
      I simply just had to BRANCH from my master, and I'd STILL be in the same folder.  There was this mental block<br>
      to understanding GIT, and I'm thinking that today, something clicked.  So I branched, and I pulled, and low and<br>
      behold I was able to seamlessly update the site with the merge in the Development Branch.  That being said<br>
      Anthony thinks pulling directly into serving a website is a horrific idea. Oh well.</p>
    </article>
    <article>
    <h2>4/24/2019</h2> 
    <h3>Layoffs and Source Control</h3>
      <p>Today's lesson is: You don't have to CLONE every branch of a Repository.  You know how there's no such thing<br>
        as a stupid question?  There is stupid answers.  And my answer for how to handle a Master/Dev/Dev2019 branch<br>
        was to clone it several times.  Yeah.  You only need to clone it once.  Also, how did I fix my Digital Ocean problem?<br>
        Basically I was still logged into it at work, so I hopped into the account, and updated the e-mail address.  But <br>
        unfortunately, I had little to no time to work on it because today my company laid off like 15% of the office.  Or<br>
        8 people. So I was so busy with mini meetings and "oh shit are we next" chatter that i didn't even get to update my<br>
        feed.  Anyway, my lesson was "I still need to learn a lot about Git".</p>
    </article>
    <article>
    <h2>4/23/2019</h2> 
    <h3>Things I did today</h3>
      <p>I created the PNG logo and added it to the site. I also created a bunch of .html files to build the navigation.<br>
        With help I was able to get the Zohomail connected to the autus.dev domain.  I was also able to create a droplet<br>
        on Digital Ocean.  My plan was to get this basic page onto there, but then I screwed myself over because I used <br>
        a domain e-mail for my verification e-mail which also meant I activated the E-mail 2-Factor for it as well. Basically<br>
        I screwed myself over.  I just read that I wrote "screwed myself over" twice.  Three times. Lyrics of fury.</p>
    </article>
    <footer>
      <hr>
      <p>2019 - Autus.Dev</p>
    </footer>
  </body>
</html>