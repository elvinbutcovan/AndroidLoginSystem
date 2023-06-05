package com.example.LifeStyle;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    Button buttonLogout;
    Button buttonhealth;
    Button buttonfitness;
    Button buttonmyaccount;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        buttonLogout = findViewById(R.id.btnlogout);
        buttonhealth = findViewById(R.id.btnhealth);
        buttonfitness = findViewById(R.id.btnfitness);
        buttonmyaccount = findViewById(R.id.btnmyaccount);

        buttonLogout.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        Intent i = new Intent(MainActivity.this,LoginActivity.class);
                        startActivity(i);
                    }
                });

        buttonmyaccount.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        Intent i = new Intent(MainActivity.this,MyAccount.class);
                        startActivity(i);
                    }
                });

        buttonhealth.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        Intent i = new Intent(MainActivity.this,Health.class);
                        startActivity(i);
                    }
                });

        buttonfitness.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        Intent i = new Intent(MainActivity.this,Fitness.class);
                        startActivity(i);
                    }
                });
    }


}