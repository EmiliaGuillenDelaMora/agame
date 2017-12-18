<!DOCTYPE html>
<html>
<head>
    <title>Emilia</title>
</head>
<body>
    <div class="container">
        <div id="app">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="x">Ancho</label>
                        <input id="x" type="text" v-model="x">
                    </div>
                    <div>
                        <label for="y">Ancho</label>
                        <input id="y" type="text" v-model="y">  
                    </div>
                    @{{$data}}
                </div>
            </div>
            <table class="table">
                <tr v-for="row in y">
                    <td v-for="col in x"></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>