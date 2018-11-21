package de.gso.osp.persistence.model;

import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name = "schueler")
public class KalenderEintrag {
	
	@Id
	@Column(unique = true, nullable = false)
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	
	private Date datum;
	
	private String kalenderKey;
	
	private String notiz;
	
	private String unterricht;
	
	private Klasse klasse;
	
	private Benutzer benutzer;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public Date getDatum() {
		return datum;
	}

	public void setDatum(Date datum) {
		this.datum = datum;
	}

	public String getNotiz() {
		return notiz;
	}

	public void setNotiz(String notiz) {
		this.notiz = notiz;
	}

	public String getUnterricht() {
		return unterricht;
	}

	public void setUnterricht(String unterricht) {
		this.unterricht = unterricht;
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

	public String getKalenderKey() {
		return kalenderKey;
	}

	public void setKalenderKey(String kalenderKey) {
		this.kalenderKey = kalenderKey;
	}

}
