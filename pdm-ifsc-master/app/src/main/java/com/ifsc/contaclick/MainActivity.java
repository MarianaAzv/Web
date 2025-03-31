package com.ifsc.contaclick;

import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

import java.text.DecimalFormat;

public class MainActivity extends AppCompatActivity {

    Integer i=0;

    EditText edPeso, edAltura;
    TextView tvIMC;

    Button b;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Log.d("ciclo de vida", "método onCreate");
        setContentView(R.layout.activity_main);

        edAltura =  findViewById(R.id.edAltura);
        edPeso =  findViewById(R.id.edPeso);
        tvIMC = findViewById(R.id.tvIMC);
        b = findViewById(R.id.button);

        b.setOnClickListener(v->{

            Double peso = Double.parseDouble(edPeso.getText().toString());
            Double altura = Double.parseDouble(edAltura.getText().toString());
            Double imc = peso/(altura*altura);

            DecimalFormat decimalFormat = new DecimalFormat( "##.##");
            tvIMC.setText(decimalFormat.format(imc));

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