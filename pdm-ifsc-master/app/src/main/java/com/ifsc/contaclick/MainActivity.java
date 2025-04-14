package com.ifsc.contaclick;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    Integer i=0;

    EditText edNome, edPeso, edAltura;
    TextView tvIMC;

    Button b;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Log.d("ciclo de vida", "método onCreate");
        setContentView(R.layout.activity_main);

        edAltura =  findViewById(R.id.edAltura);
        edPeso =  findViewById(R.id.edPeso);
        edNome =  findViewById(R.id.edNome);

        tvIMC = findViewById(R.id.tvIMCTxt);
        b = findViewById(R.id.button);

        b.setOnClickListener(v->{

            String heightTxt = edAltura.getText().toString();
            double height = Double.parseDouble(heightTxt);

            String weightTxt = edPeso.getText().toString();
            double weight = Double.parseDouble(weightTxt);

            double imc = weight/(height*height);

            Intent intent = new Intent(getApplicationContext(), MainActivityB.class);
            String nome = edNome.getText().toString();
            String peso = edPeso.getText().toString();
            String altura = edAltura.getText().toString();
            String imcTxt = String.valueOf(imc);
            intent.putExtra("nome",nome);
            intent.putExtra("peso",peso);
            intent.putExtra("altura",altura);
            intent.putExtra("imc",imcTxt);
            startActivity(intent);
        });


    }

    @Override
    protected void onStart() {
        super.onStart();
        Log.d("ciclo de vida", "método onStart");
    }

    @Override
    protected void onResume() {
        super.onResume();
        Log.d("ciclo de vida", "método onResume");
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        Log.d("ciclo de vida", "método onDestroy");
    }

    @Override
    protected void onPause() {
        super.onPause();
        Log.d("ciclo de vida", "método onPause");
    }

    @Override
    protected void onStop() {
        super.onStop();
        Log.d("ciclo de vida", "método oStop");
    }


}