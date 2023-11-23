
    <style>
        body {
            font-family: 'Consolas', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #2c3e50;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        div {
            position: relative;
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #34495e;
            color: #ecf0f1;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        input:focus {
            background-color: #2c3e50;
            color: #ffffff;
        }

        label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #ecf0f1;
            font-size: 12px;
            transition: color 0.3s ease, font-size 0.3s ease, transform 0.3s ease;
        }

        input:valid + label,
        input:focus + label {
            font-size: 10px;
            transform: translateY(-30%);
            color: #3498db;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
    
    <form action="<?php echo site_url('ServiceController/Ajouter'); ?>" method="post">
        <div>
            <input
                type="text"
                placeholder="Nom d'un service"
                name="nom"
                id="nom"
                required
            />
            <label for="nom">Nom</label>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>

</body>
</html>
