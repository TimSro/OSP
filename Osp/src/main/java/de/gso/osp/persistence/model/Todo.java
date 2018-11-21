package de.gso.osp.persistence.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name = "todo")
public class Todo {

    @Id
    @Column(unique = true, nullable = false)
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
    
    private String todoString;
    
    private boolean done;
    
    private Benutzer benutzer;
    
    private Klasse klasse;
    
    private Unterricht unterricht;

	public String getTodoString() {
		return todoString;
	}

	public void setTodoString(String todoString) {
		this.todoString = todoString;
	}

	public boolean isDone() {
		return done;
	}

	public void setDone(boolean done) {
		this.done = done;
	}

    @ManyToOne
    @JoinColumn(name = "benutzer_id")
	public Benutzer getBenutzer() {
		return benutzer;
	}

	public void setBenutzer(Benutzer benutzer) {
		this.benutzer = benutzer;
	}

    @ManyToOne
    @JoinColumn(name = "klasse_id")
	public Klasse getKlasse() {
		return klasse;
	}

	public void setKlasse(Klasse klasse) {
		this.klasse = klasse;
	}
	
    @ManyToOne
    @JoinColumn(name = "unterricht_id")
	public Unterricht getUnterricht() {
		return unterricht;
	}

	public void setUnterricht(Unterricht unterricht) {
		this.unterricht = unterricht;
	}

}
