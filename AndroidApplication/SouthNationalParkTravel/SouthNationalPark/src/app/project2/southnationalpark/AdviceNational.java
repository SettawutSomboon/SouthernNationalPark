package app.project2.southnationalpark;

import android.app.Activity;
import android.app.Dialog;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

public class AdviceNational extends Activity{
	
	Button btn_general,btn_food,btn_weather,btn_uniform,btn_animal,btn_other,btn_gallery;
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.advicemain);
		
		btn_general = (Button)findViewById(R.id.btn_general);
		btn_food = (Button)findViewById(R.id.btn_food);
		btn_weather = (Button)findViewById(R.id.btn_weather);
		btn_uniform = (Button)findViewById(R.id.btn_uniform);
		btn_animal = (Button)findViewById(R.id.btn_animal);
		btn_other = (Button)findViewById(R.id.btn_other);
		btn_gallery = (Button)findViewById(R.id.btn_gallery);
		
		//btn_general.setOnClickListener(this);
		btn_general.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
                final Dialog dialog = new Dialog(AdviceNational.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.advice_custom_dialog);
                dialog.setCancelable(true);
                
                Button button1 = (Button)dialog.findViewById(R.id.button1);
                button1.setOnClickListener(new OnClickListener() {
                    public void onClick(View v) {
/*                        Toast.makeText(getApplicationContext()
                                , "Close dialog", Toast.LENGTH_SHORT);*/
                        dialog.cancel();
                    }
                });
                LinearLayout linear = (LinearLayout)dialog.findViewById(R.id.linear_bg);
                linear.setBackgroundResource(R.color.orange);
                TextView textView1 = (TextView)dialog.findViewById(R.id.textView1);
                textView1.setText("�����");
                ImageView img = (ImageView)dialog.findViewById(R.id.img_nationalpark);
                img.setImageResource(R.drawable.travel);
                TextView textView2 = (TextView)dialog.findViewById(R.id.textView2);
                textView2.setText(R.string.general);

                dialog.show();
            }
        });
		//btn_food.setOnClickListener(this);
		btn_food.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
                final Dialog dialog = new Dialog(AdviceNational.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.advice_custom_dialog);
                dialog.setCancelable(true);
                
                Button button1 = (Button)dialog.findViewById(R.id.button1);
                button1.setOnClickListener(new OnClickListener() {
                    public void onClick(View v) {
/*                        Toast.makeText(getApplicationContext()
                                , "Close dialog", Toast.LENGTH_SHORT);*/
                        dialog.cancel();
                    }
                });
                LinearLayout linear = (LinearLayout)dialog.findViewById(R.id.linear_bg);
                linear.setBackgroundResource(R.color.red);
                TextView textView1 = (TextView)dialog.findViewById(R.id.textView1);
                textView1.setText("�����");
                ImageView img = (ImageView)dialog.findViewById(R.id.img_nationalpark);
                img.setImageResource(R.drawable.foods);
                TextView textView2 = (TextView)dialog.findViewById(R.id.textView2);
                textView2.setText(R.string.food);

                dialog.show();
            }
        });
		//btn_weather.setOnClickListener(this);
		btn_weather.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
                final Dialog dialog = new Dialog(AdviceNational.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.advice_custom_dialog);
                dialog.setCancelable(true);
                
                Button button1 = (Button)dialog.findViewById(R.id.button1);
                button1.setOnClickListener(new OnClickListener() {
                    public void onClick(View v) {
/*                        Toast.makeText(getApplicationContext()
                                , "Close dialog", Toast.LENGTH_SHORT);*/
                        dialog.cancel();
                    }
                });
                LinearLayout linear = (LinearLayout)dialog.findViewById(R.id.linear_bg);
                linear.setBackgroundResource(R.color.weather);
                TextView textView1 = (TextView)dialog.findViewById(R.id.textView1);
                textView1.setText("Ĵ١��");
                ImageView img = (ImageView)dialog.findViewById(R.id.img_nationalpark);
                img.setImageResource(R.drawable.weather);
                TextView textView2 = (TextView)dialog.findViewById(R.id.textView2);
                textView2.setText(R.string.weather);

                dialog.show();
            }
        });
		//btn_uniform.setOnClickListener(this);
		btn_uniform.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
                final Dialog dialog = new Dialog(AdviceNational.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.advice_custom_dialog);
                dialog.setCancelable(true);
                
                Button button1 = (Button)dialog.findViewById(R.id.button1);
                button1.setOnClickListener(new OnClickListener() {
                    public void onClick(View v) {
/*                        Toast.makeText(getApplicationContext()
                                , "Close dialog", Toast.LENGTH_SHORT);*/
                        dialog.cancel();
                    }
                });
                LinearLayout linear = (LinearLayout)dialog.findViewById(R.id.linear_bg);
                linear.setBackgroundResource(R.color.uniform);
                TextView textView1 = (TextView)dialog.findViewById(R.id.textView1);
                textView1.setText("����觡��");
                ImageView img = (ImageView)dialog.findViewById(R.id.img_nationalpark);
                img.setImageResource(R.drawable.banduniform);
                TextView textView2 = (TextView)dialog.findViewById(R.id.textView2);
                textView2.setText(R.string.uniform);

                dialog.show();
            }
        });
		//btn_animal.setOnClickListener(this);
		btn_animal.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
                final Dialog dialog = new Dialog(AdviceNational.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.advice_custom_dialog);
                dialog.setCancelable(true);
                
                Button button1 = (Button)dialog.findViewById(R.id.button1);
                button1.setOnClickListener(new OnClickListener() {
                    public void onClick(View v) {
/*                        Toast.makeText(getApplicationContext()
                                , "Close dialog", Toast.LENGTH_SHORT);*/
                        dialog.cancel();
                    }
                });
                LinearLayout linear = (LinearLayout)dialog.findViewById(R.id.linear_bg);
                linear.setBackgroundResource(R.color.animal);
                TextView textView1 = (TextView)dialog.findViewById(R.id.textView1);
                textView1.setText("��ŧ�ѵ��Ѵ����");
                ImageView img = (ImageView)dialog.findViewById(R.id.img_nationalpark);
                img.setImageResource(R.drawable.stopanimal);
                TextView textView2 = (TextView)dialog.findViewById(R.id.textView2);
                textView2.setText(R.string.animal);

                dialog.show();
            }
        });
		//btn_other.setOnClickListener(this);
		btn_other.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
                final Dialog dialog = new Dialog(AdviceNational.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.advice_custom_dialog);
                dialog.setCancelable(true);
                
                Button button1 = (Button)dialog.findViewById(R.id.button1);
                button1.setOnClickListener(new OnClickListener() {
                    public void onClick(View v) {
/*                        Toast.makeText(getApplicationContext()
                                , "Close dialog", Toast.LENGTH_SHORT);*/
                        dialog.cancel();
                    }
                });
                LinearLayout linear = (LinearLayout)dialog.findViewById(R.id.linear_bg);
                linear.setBackgroundResource(R.color.other);
                TextView textView1 = (TextView)dialog.findViewById(R.id.textView1);
                textView1.setText("����");
                ImageView img = (ImageView)dialog.findViewById(R.id.img_nationalpark);
                img.setImageResource(R.drawable.banned);
                TextView textView2 = (TextView)dialog.findViewById(R.id.textView2);
                textView2.setText(R.string.other);

                dialog.show();
            }
        });
		//btn_gallery.setOnClickListener(this);
		btn_gallery.setOnClickListener(new OnClickListener() {
            public void onClick (View v) {
    			Intent GalleryIntent = new Intent(AdviceNational.this, ActivityTab.class);
    			startActivity(GalleryIntent);
            }
        });
	}
	
	
	/*@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch (v.getId()){
		
		case R.id.btn_general:
			Log.d("general","general");
			//Display difficulty dialog 
			new AlertDialog.Builder(this)
			.setTitle("�����")
			.setMessage(R.string.general)
			.setNegativeButton("OK", new DialogInterface.OnClickListener() {
                public void onClick(DialogInterface dialog, int which) {
                // Write your code here to execute after dialog closed
                //Toast.makeText(getApplicationContext(), "You clicked on OK", Toast.LENGTH_SHORT).show();
                }
        })
					.show();
			break;
		case R.id.btn_food:
			Log.d("food","food");
			//Display difficulty dialog 
			new AlertDialog.Builder(this)
			.setTitle("�����")
			.setMessage(R.string.food)
			.setNegativeButton("OK", new DialogInterface.OnClickListener() {
                public void onClick(DialogInterface dialog, int which) {
                // Write your code here to execute after dialog closed
                //Toast.makeText(getApplicationContext(), "You clicked on OK", Toast.LENGTH_SHORT).show();
                }
        })
					.show();
			break;
		case R.id.btn_weather:
			Log.d("weather","weather");
			//Display difficulty dialog 
			new AlertDialog.Builder(this)
			.setTitle("Ĵ١��")
			.setMessage(R.string.weather)
			.setNegativeButton("OK", new DialogInterface.OnClickListener() {
                public void onClick(DialogInterface dialog, int which) {
                // Write your code here to execute after dialog closed
                //Toast.makeText(getApplicationContext(), "You clicked on OK", Toast.LENGTH_SHORT).show();
                }
        })
					.show();
			break;
		case R.id.btn_uniform:
			Log.d("uniform","uniform");
			//Display difficulty dialog 
			new AlertDialog.Builder(this)
			.setTitle("����觡��")
			.setMessage(R.string.uniform)
			.setNegativeButton("OK", new DialogInterface.OnClickListener() {
                public void onClick(DialogInterface dialog, int which) {
                // Write your code here to execute after dialog closed
                //Toast.makeText(getApplicationContext(), "You clicked on OK", Toast.LENGTH_SHORT).show();
                }
        })
					.show();
			break;
		case R.id.btn_animal:
			Log.d("animal","animal");
			//Display difficulty dialog 
			new AlertDialog.Builder(this)
			.setTitle("��ŧ�ѵ��Ѵ����")
			.setMessage(R.string.animal)
			.setNegativeButton("OK", new DialogInterface.OnClickListener() {
                public void onClick(DialogInterface dialog, int which) {
                // Write your code here to execute after dialog closed
                //Toast.makeText(getApplicationContext(), "You clicked on OK", Toast.LENGTH_SHORT).show();
                }
        })
					.show();
			break;
		case R.id.btn_other:
			Log.d("other","other");
			//Display difficulty dialog 
			new AlertDialog.Builder(this)
			.setTitle("����")
			.setMessage(R.string.other)
			.setNegativeButton("OK", new DialogInterface.OnClickListener() {
                public void onClick(DialogInterface dialog, int which) {
                // Write your code here to execute after dialog closed
                //Toast.makeText(getApplicationContext(), "You clicked on OK", Toast.LENGTH_SHORT).show();
                }
        })
					.show();
			break;
		case R.id.btn_gallery:
			Log.d("gallery","gallery");
			Intent GalleryIntent = new Intent(this, TestTab.class);
			startActivity(GalleryIntent);
			break;

	}
	}*/
}
