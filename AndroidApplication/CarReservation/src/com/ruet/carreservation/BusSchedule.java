package com.ruet.carreservation;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

public class BusSchedule extends ActionBarActivity {
Button button[]=new Button[13];

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.schedule);
      
       button[0]=(Button) findViewById(R.id.button_january);
		button[1]=(Button) findViewById(R.id.button_febuary);
		button[2]=(Button) findViewById(R.id.button_march);
		button[3]=(Button) findViewById(R.id.button_april);
		button[4]=(Button) findViewById(R.id.button_may);
		button[5]=(Button) findViewById(R.id.button_june_july);
		button[6]=(Button) findViewById(R.id.button_august_1);
		button[7]=(Button) findViewById(R.id.button_august_2);
		button[8]=(Button) findViewById(R.id.button_september_1);
		button[9]=(Button) findViewById(R.id.button_september_2);
		button[10]=(Button) findViewById(R.id.button_october_1);
		button[11]=(Button) findViewById(R.id.button_october_2);
		button[12]=(Button) findViewById(R.id.button_november_decembr);
		
		
			button[0].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[0].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});

			button[1].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[1].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[2].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[2].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[3].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[3].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[4].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[4].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[5].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[5].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[6].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[6].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[7].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[7].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[8].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[8].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[9].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[9].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[10].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[10].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			
			button[11].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[11].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
			button[12].setOnClickListener(new OnClickListener() {
			
				
				String input_month;
				@Override
				public void onClick(View v) {
					
					input_month=button[12].getText().toString();
					Intent in = new Intent(BusSchedule.this,ShowSchedule.class);
					in.putExtra("month", input_month);
					startActivity(in);
					
				}
			});
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {

		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.car_reservation, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}


}
