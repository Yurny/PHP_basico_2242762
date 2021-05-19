package Servlet;
import java.util.*;
public class ejercicio {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		//a		tributos
		int estudiantes;
		double nota1,nota2,nota3,nota4;
		String nombre;

		//scanne		r para capturar datos
		Scanner entrada=new Scanner(System.in);

		System.out.		println("¿Cuantos estudiantes quieren saber que nota necesitan?");
		estudiantes=entrada.nextInt();

		//ciclo para l		a cantidad de estudiantes antes solicitados
		int i=0;
		do {
			i++;
			System.out.println("¿Cual es el nombre del estudiante "+i+"?");
			nombre=entrada.next();
			System.out.println(nombre+" digite la primera nota la cual equivale al 20%");
			nota1=entrada.nextDouble();
			System.out.println(nombre+" digite la segunda nota la cual equivale al 25%");
			nota2=entrada.nextDouble();
			System.out.println(nombre+" digite la tercera nota la cual equivale al 30%");
			nota3=entrada.nextDouble();
			nota4=(3.5-((nota1*0.2)+(nota2*0.25)+(nota3*0.3)))/0.25;
			if(nota4<2) {
				System.out.println("La nota que debe sacar es "+nota4+" "+nombre+" Exelente trabajo");
			}else if(nota4>=2.1 && nota4<=3.5){
				System.out.println("La nota que debe sacar es "+nota4+" "+nombre+" Buen trabajo");
			}else if(nota4>3.5) {
				System.out.println("La nota que debe sacar es "+nota4+" "+nombre+" Usted debe estudiar mas");
			}
		}while(i<estudiantes);
		//System.out.println("El programa a terminado su ejecucion");
		entrada.close();
	}
}
