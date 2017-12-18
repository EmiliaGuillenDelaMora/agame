<!DOCTYPE html>
<html>
<head>
    <title>Emilia</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
    <div class="container">
        <div id="app">
            <div class="row">
                <div class="col">
                    <div class="form-group" >
                        <label for="x">Ancho</label>
                        <input id="x" type="text" v-model="x">
                    </div>
                    <div class="form-group">
                        <label for="y">Alto</label>
                        <input id="y" type="text" v-model="y">  
                    </div>
                    @{{$data}}
                </div>
                <a @click="change" class="btn">Cambiar</a>>
            </div>
            <table class="table">
                <tr v-for="row in y_item">
                    <td v-for="col in x_item"><cell :x="col" :y="row"><cell></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>