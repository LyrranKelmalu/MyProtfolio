<template>
    <div>
        <h2>Registration form</h2>
        <div class="reg_form">
            <router-link to="/">
                <button>x</button>
            </router-link>
            <form action="save_user.php" method="post">
                <p>
                    <label>Login:</label>
                    <input name="login" type="text" size="15" maxlength="15"><br>
                </p>
                <p>
                    <label>Password:</label>
                    <input name="password" type="password" size="15" maxlength="15"><br>
                </p>
                <p>
                    <input type="submit" name="submit" value="Registration">
                </p></form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'registration',
    methods: {
        close(){

        }
    }
}
</script>

<style>
    .reg_form{
        width: 30%;
        margin: 0 auto;
        border: solid 2px #000000;
    }
    @media only screen and (max-width: 1440px) {
        .reg_form{
            width: 35%;
        }
        img{
            width: 200px;
            height: auto;
        }
    }
    @media only screen and (max-width: 1023px) {
        .reg_form{
            width: 90%;
        }
        img{
            width: 150px;
            height: auto;
        }
    }
    input{
        width: 30%;
    }
</style>