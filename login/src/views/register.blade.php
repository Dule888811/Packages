<div class="widget">
    <h2>Register</h2>
    <div class="inner">
        <form action="{{route('users.store')}}" method="post">
            @csrf
            password:<br/>
            <input type="password" name="password" />
            </li>
            <li>
                Password again:<br/>
                <input type="password" name="passwordA" />
            </li>
            <li>
                name:<br/>
                <input type="text" name="name" />
            </li>

            <li>
                username:<br/>
                <input type="text" name="username" />
            </li>

            <li>
                E-mail:<br/>
                <input type="text" name="email" />
            </li>
            <li>
                <input class="btn" type="submit" value="Register" />
            </li>
            </ul>
        </form></br>
    </div>
</div>