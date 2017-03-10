@extends('layouts.master')

@section('title', 'Features')

@section('content')
<section data-sticky-container class="container">
    <section class="col-sm-3 hidden-sm-down" style="position: relative;">
        <div class="scrollspy">
            <nav class="nav nav-stacked" id="toc" data-toggle="toc"></nav>
        </div>
    </section>
    <section class="nav container col-sm-9 scrollspy-elements" style="position:relative;">
        <div class="row col-xs-12">
            <div>
                <h1>Key Features</h1>
                <p>
                    These are some features that are not fully covered by simple commands:
                    <ul>
                        <li><b>Database</b> containing notes about users, all known usernames and nicknames, with good search based on keyword, userid or mention.</li>
                        <li><b>Configure</b> many aspects of the bot: customize the command character, remove discord invites, links, spam or messages that contain many mentions, and ban these spambots! (<code>!permit</code> is a thing!) And the Botwinder will give you some cookies as well! (<a href="/config">Can be configured.</a>)</li>
                        <li>Use reddit <b>verification system</b>, where the bot will send a user information how to get verified - the user is asked to send a PM over Reddit to the bot. After Botwinder receives this message, it will save the info in the database and assign the user configured role. If they have been verified previously and for some reason left the server (or have been kicked/banned) the bot will simply assign them the verified role without having them re-send the message. (<a href="/config">Can be configured.</a>)</li>
                        <li><b>Log user events</b> like user joining or leaving the server, being promoted or demoted, and PM a new user when they join the server. You can change these messages to your liking, set whether to @mention them, or just use their name as text, etc. (<a href="/config">Can be configured.</a>)</li>
                        <li><b>Log moderation events</b>, banned and kicked users, edited and deleted messages, where you can also set up "ignored channels" where the bot will ignore deleted messages, etc... (<a href="/config">Can be configured.</a>)</li>
                        <li>Set up your own <b>custom commands</b>, with a few keywords! (<code>!commands</code>)</li>
                        <li>You can <b>create an alias</b> to <i>any</i> command. (<code>!alias</code>)</li>
                        <li>Create <b>scheduled messages</b> or timers. These can even be <b>scheduled commands</b>, so you can even schedule a daily <code>!nuke</code> of a channel! :D (<code>!timers</code>)</li>
                        <li>Run a <b>poll</b>! Those can be as simple as with yes/no/abstain options, or you can add anything you desire. You can even choose to run a free poll where the user can vote on literally anything and it will be added as a new option! (<code>!poll</code>)</li>
                        <li>Run the best <b>events</b> in the universe with signups, checkin, keep track of score, etc... (<code>!event</code>)</li>
                        <li>Keep track of your <b>meetings</b>, generate nice minutes and logs. (<code>!meeting</code>)</li>
                        <li>Set-up <b>Livestream notifications</b> (twitch, hitbox and beam) and run giveaways on discord, and much more to come...</li>
                        <li>Last but not least, we put a lot of emphasis on <b>security</b>. No server has access to any data from any other server, and no sensitive data is available to public. As you can see below we have different permission levels, and everything somewhat important or sensitive is hidden behind those permissions, including previously known usernames, times, etc etc...</li>
                    </ul>
                </p>
                <h1 class="features-h1">Command permissions</h1>
                <div class="features-indent">
                    <p>
                        &nbsp; This documentation contains a list of commands, permissions who can use those, and short description. Permissions are configured via the <a href="/config">configuration</a>, and the hierarchy is as follows: <code>ServerOwner&nbsp;&gt;&nbsp;Admin&nbsp;&gt;&nbsp;Moderator&nbsp;&gt;&nbsp;SubModerator&nbsp;&gt;&nbsp;Member&nbsp;&gt;&nbsp;Everyone</code> where for example Admin can use everything that is marked as Admin, Moderator, or Everyone, but can not use commands marked as ServerOwner.
                    </p>
                    <p>
                        &nbsp; <code>ServerOwner</code> stands for either server owner, or someone with the <code>ManageServer</code> and <code>Administrator</code> permissions, and <code>Admin</code>, <code>Moderator</code>, <code>SubModerator</code> and <code>Member</code> roles have to be <a href="/config">configured</a>.
                    </p>
                </div>

                <h1 class="features-h1">Commands ~ Basic</h1>
                <div class="features-indent">
                    <h2>help</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display a list of commands. If used in PM, it will display commands that can be used in PM, if used in-chat, it will display commands that can be used the in-chat.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use without parameters to get the list, or use it with <code>regex</code> parameter to search for specific commands.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>botwinder</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Will tell you about the bot.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>author / history</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Will tell you about the history of the bot, and a little bit about the people behind it. (It's a wall of text...)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>patchnotes</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display some info about latest updates.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>

                <h1 class="features-h1">Commands ~ Admin</h1>
                <div class="features-indent">
                    <h2>shoo</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Botwinder will leave your server.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>ServerOwner</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>config</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Configure Botwinder for your server. <b>This command is obsolete - use the <a href="/config">Configuration</a> page.</b></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>ServerOwner</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>createRole</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Create a new role with no permissions and return its <code>id</code>.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>name</code> of the role.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>getRole</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Get a name, id and colour of a role.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>name</code> or <code>id</code> of a role.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>mentionMembersOf</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display a list of members of a role. <i>(This will mention their names - use in closed channel, or use standard <code>membersOf</code>)</i></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>name</code> or <code>id</code> of a role.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>promoteEveryone</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Assign a role to everyone on your server. Please ensure correct hierarchy before using this command.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>ID</code> of a role. This does not accept name of the role.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>channels</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>List of Channels on this server, and their IDs.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>alias</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Manage command aliases.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>permissions</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Configure permission groups for every built-in command. Use without parameters for help.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>ServerOwner only!</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>restrictCommand</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Block a command from certain channels.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>CommandID</code>, <code>add</code> or <code>remove</code>, and <code>ChannelID</code> (that long number)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>deleteRequest</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Set a command to have the issuing request message deleted automatically.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>CommandID</code> (that long number) and <code>true</code> or <code>false</code>, whether set it to delete or not.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>commands</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Add, edit, or remove CustomCommands on your server.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>operations</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display info about all queued or running operations on your server. These are for example <code>nuke</code> or <code>archive</code>.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>cancel</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Cancel queued or running operation - use in the same channel.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Name of the command to cancel (nuke, archive, etc...)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>archive</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>This will pull the whole channel history and save it as a text file. There is a limit of <code>50 000</code> messages for safety reasons, but you can poke Rhea, she can <a href="img/archive.png" target="_">archive without limits</a>. (..because this operation should be observed, as it is really intense on memory.)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Default usage without parameters will result in log formatting with user IDs and full timestamps. Use as <code>archive nice</code> to use nice formatting for people.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>nuke</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Nukes the whole channel (delets all the messages)  You can also mention a user to delete all of their messages.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None, optional <code>@user</code> mention</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>hideChannel</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Hide or un-hide the current channel by denying or allowing the Read Messages permission for everyone.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use with <code>silent</code> parameter for silent execution, or none for standard response.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>verify</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>This command will either send verification info to the user, or verify them manually if used by an Admin.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>See the <a href="/config">config</a> page for more info.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>

                <h1 class="features-h1">Commands ~ Moderator</h1>
                <div class="features-indent">
                    <h2>timer</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Set up scheduled or recurring messages for specific channel, or even execute scheduled commands.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>clear</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Deletes specified amount of messages. If you mention someone as well, it will remove only their messages.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>n</code> - number of messages to delete, plus you can optionally mention one <code>@user</code> <i>after</i> the <code>n</code>.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    <tr>
                        <td>Example</td>
                        <td><code>!clear 3 @user</code> - removes the last three messages sent by the user.</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>membersOf</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display a list of members of a role.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>name</code> or <code>id</code> of a role.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Admin</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>livestreamAdd</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Add a channel to watch list, to send a short notification message in "this" channel, whenever they go live. Supported services are: twitch, hitbox & beam. (Use of this command and bot's response will be deleted for your convenience.)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>service channel</code> where <code>service</code> can be either twitch, hitbox or beam; and <code>channel</code> is what it seems to be..</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    <tr>
                        <td>Example</td>
                        <td><code>!livestreamAdd twitch RheaAyase</code></td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>livestreamRemove</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Remove a livestream from notifications (added by <code>livestreamAdd</code>)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>service channel</code> where <code>service</code> can be either twitch, hitbox or beam; and <code>channel</code> is what it seems to be..</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    <tr>
                        <td>Example</td>
                        <td><code>!livestreamRemove twitch RheaAyase</code></td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>livestreamList</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display list of livestream notifications in the current channel.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>op</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>_op_ yourself to be able to use <code>mute</code>, <code>kick</code> or <code>ban</code> commands. <b>(Only if <a href="/config">configured</a>!)</b></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator (& SubModerator - will apply to <code>mute</code> only)</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>kick</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Kick a user out of your server. This requires worded description why did you kick them out - they will receive this message via PM (and it will be added to the system as a warning) Example PM: <code>Hello! I regret to inform you, that you have been **kicked out of the Elite Dangerous server** for the following reason: ......... _(You can rejoin the server in a few minutes.)_</code></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user reason</code> where <code>@user</code> = user mention or id; <code>reason</code> = worded description why did you kick them out.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>ban</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>This command can ban a User permanently, or for specific amount of time, and it can do the same with people, who are not on the server yet. (It will ban them as soon as they join.) This requires worded description why did you ban them - they will receive this via PM (and it will be added to the system as a warning) Example PM: <code>Hello! I regret to inform you, that you have been **banned {for x hour(s) /or/ permanently} on the Elite Dangerous server** for the following reason: .........</code></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user time reason</code> where <code>@user</code> = user mention or id; <code>time</code> = duration of the ban (e.g. <code>7d</code> or <code>12h</code> or <code>0</code> for permanent.); <code>reason</code> = worded description why did you ban them.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>silentBan</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>The same as <code>ban</code>, but it will not send the <code>reason</code> PM. (Hence silent..)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user time reason</code> where <code>@user</code> = user mention or id; <code>time</code> = duration of the ban (e.g. <code>7d</code> or <code>12h</code> or <code>0</code> for permanent.) <code>reason</code> = worded description why did you ban them.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>purgeBan</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>The same as <code>ban</code>, but it will also delete their messages in last 24 hours.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user time reason</code> where <code>@user</code> = user mention or id; <code>time</code> = duration of the ban (e.g. <code>7d</code> or <code>12h</code> or <code>0</code> for permanent.) <code>reason</code> = worded description why did you ban them.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>quickBan</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Quickly ban someone using pre-configured reason and duration, it also removes their messages. (This command has to be first <a href="/config">configured</a>.)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> user mention or id; You can mention several people at once.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>unban</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Correctly unban a user.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> user mention or id</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>muteChannel</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Temporarily mute the current channel, the duration can be set in the <a href="/config">configuration</a>.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>unmuteChannel</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Unmute previously muted channel.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Moderator</td>
                    </tr>
                    </table>
                </div>

                <h1 class="features-h1">Commands ~ SubModerator</h1>
                <div class="features-indent">
                    <h2>mute</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Temporarily mute mentioned members from both the chat and voice. This command has to be configured in the <a href="/config">configuration</a>.
                            <br />
                            <b>It is important</b> that you understand how does the Muting system work:<br />
                            Regardless of how is the user muted, they get unmuted next time the bot restarts, this is to ensure that nobody is left hanging, because it is supposed to be a timed feature.
                            Now if someone leaves and then rejoins the server, they will be Muted again, and this time it is treated as an antispam mute, which means that the third one will get you banned. So cheating to get rid of the "mute" role is really bad idea and if the <i>victim</i> leaves and joins the server twice while they are muted, they get banned.
                        </td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> mention or ID (or multiple mentions)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>unmute</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Unmute previously muted members. This command has to be configured in the <a href="/config">configuration</a>.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> mention or ID (or multiple mentions)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>permit</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Permit mentioned members to post links and spam, a single message within three minutes will not be removed. (This depends on antispam <a href="/config">configuration</a>)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> mention of a member (or multiple mentions) to permit.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>stats</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display some info about this server and some numbers.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>whois</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Search for a User on your server (they must be on your server)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> mention, name or ID.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>find</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Find a User in the database. This will search in all known usernames and nicknames (People can change their name, this will search their previous names as well.)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use with any keywords you like.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>addWarning</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Take a note about <code>@user</code>, what have they done this time... <i>(This does not PM the user anything.)</i></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user warning message</code>; where <code>@user</code> is a user mention or id and you can add the same warning to multiple people, just mention them all.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>removeWarning</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Remove the last created warning.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> mention or ID (or multiple mentions)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>removeAllWarnings</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Remove all the warnings.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> mention or ID (or multiple mentions)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>naughtylist</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Return a list of everyone who has a warning. Warning is a simple message, note in the user database, about a user. This serves to keep track of people, see how many bad things have they done in the past, so you can decide whether to use more severe punishment. Use this command, or whois/find to display info about naughty people and their warnings.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>memberRoles</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>See what Member Roles can you assign.<b>Set this up in the <a href="/config">configuration</a>.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user</code> user mention or id</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>promote</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Assign a Member role to the user.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user role</code> where <code>@user</code> = user mention or id (will accept multiple mentions at once); and <code>role</code> = the name of a role to assign.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>demote</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Remove a Member role from the user.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>@user role</code> where <code>@user</code> = user mention or id (will accept multiple mentions at once); and <code>role</code> = the name of a role to remove.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>event</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>A system to help you run the best events.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator / Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>poll</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Open a poll, you can then vote on it using <code>vote</code> command. Limited to one poll per server.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>giveaway</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Manage a giveaway on your server with parameters start, end, or roll.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>SubModerator</td>
                    </tr>
                    </table>
                </div>

                <h1 class="features-h1">Commands ~ Everyone</h1>
                <div class="features-indent">
                    <h2>publicRoles</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Display a list of PublicRoles. These are similar to MemberRoles, except that these can be joined by anyone using <code>join</code> or <code>leave</code> commands. Useful if you want your members to have tags, for example for different platform (they play the game pn pc or xbox..) or if they have different specialisation (healer, tank, ...) etc etc =] <b>Set this up in the <a href="/config">configuration</a>.</b></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>join</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Join one of the PublicRoles.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>name</code> of a PublicRole that you wish to join.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>leave</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Leave one of the PublicRoles.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td><code>name</code> of a PublicRole that you wish to leave.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>meeting</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Manage a meeting that will create nice logs and meeting minutes on our website. <a href="http://botwinder.info/meetings/244607894165651457/Example%20meeting">Example here.</a></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>vote</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Vote on a poll, created and managed by the <code>poll</code> command.</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use without parameters to display the poll title and options, or vote using an <code>option</code> parameter.</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>g</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Participate in currently active <code>giveaway</code></td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>work</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Botwinder will keep track of your time at work (uses GMT for calculations of the month)</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use the command without parameters for more details. (You can also use this in PM.)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
                <div class="features-indent">
                    <h2>dice</h2>
                    <table class="command">
                    <tr>
                        <td>Description</td>
                        <td>Roll a dice!</td>
                    </tr>
                    <tr>
                        <td>Parameters</td>
                        <td>Use one of the following formats: <code>6</code> / <code>3 d20</code> / <code>15 d6 &gt;5</code> <i>(Yes, with spaces!)</i> where the <code>d</code> specifies how many sides the dice has, and the <code>&gt;</code> filters results and total count to be greater than five in this example. (You can use <code>&gt;</code>, <code>&lt;</code> or <code>=</code>)</td>
                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td>Everyone</td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection