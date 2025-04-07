package com.ifsc.contaclick;

import android.os.Bundle;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivityB extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main_b);

        Bundle bundle = getIntent().getExtras();

        String msg = bundle.getString("mensagem");
        String altura = bundle.getString("altura");
        TextView textView = findViewById(R.id.textView);
        textView.setText(msg);
        TextView tvAltura = findViewById(R.id.tvAltura);
        tvAltura.setText(altura);

    }
}