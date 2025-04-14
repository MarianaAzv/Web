package com.ifsc.contaclick;

import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;

import java.text.DecimalFormat;

public class MainActivityB extends AppCompatActivity {

    Integer imagens[] = new Integer[] {R.drawable.abaixopeso, R.drawable.normal, R.drawable.sobrepeso, R.drawable.obesidade1, R.drawable.obesidade2, R.drawable.obesidade3};
    ImageView imageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main_b);

        Bundle bundle = getIntent().getExtras();

        String nome = bundle.getString("nome");
        String peso = bundle.getString("peso");
        String altura = bundle.getString("altura");
        String imc = bundle.getString("imc");
        TextView tvNome= findViewById(R.id.tvNome);
        tvNome.setText(nome);
        TextView tvPeso = findViewById(R.id.tvPeso);
        tvPeso.setText(peso);
        TextView tvAltura = findViewById(R.id.tvAltura);
        tvAltura.setText(altura);
        TextView tvIMCTxt = findViewById(R.id.tvIMCTxt);
        tvIMCTxt.setText(imc);
        imageView = findViewById(R.id.imageView);

        String imcTxt = tvIMCTxt.getText().toString();
        double valorIMC = Double.parseDouble(imcTxt);

        DecimalFormat decimalFormat = new DecimalFormat("##.##");

        if(valorIMC<18.5){
            imageView.setImageResource(imagens[0]);
        }
        else if(valorIMC>=18.5 && valorIMC<=24.9){
            imageView.setImageResource(imagens[1]);
        }
        else if(valorIMC>=25 && valorIMC<=29.9){
            imageView.setImageResource(imagens[2]);
        }
        else if(valorIMC>=30 && valorIMC<=34.9){
            imageView.setImageResource(imagens[3]);
        }
        else if(valorIMC>=35 && valorIMC<=39.9){
            imageView.setImageResource(imagens[4]);
        }
        else if(valorIMC>=40){
            imageView.setImageResource(imagens[5]);
        }

    }

}