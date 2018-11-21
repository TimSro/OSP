package de.gso.osp.persistence.model;

import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinTable;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToMany;
import javax.persistence.Table;

@Entity
@Table(name = "benutzer")
public class Benutzer {
	
	@Id
    @Column(unique = true, nullable = false)
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;

    private boolean geschlecht;

    private String name;

    @Column(length = 60)
    private String password;

    private boolean spgesetzt;
    
    private List<Fach> fächer;
    

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public boolean getGeschlecht() {
		return geschlecht;
	}

	public void setGeschlecht(boolean geschlecht) {
		this.geschlecht = geschlecht;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public boolean isSpgesetzt() {
		return spgesetzt;
	}

	public void setSpgesetzt(boolean spgesetzt) {
		this.spgesetzt = spgesetzt;
	}

	 @ManyToMany
	 @JoinTable(
	   name="benutzer_fach",
	   joinColumns=@JoinColumn(name="benutzer_id", referencedColumnName="id"),
	   inverseJoinColumns=@JoinColumn(name="fach_id", referencedColumnName="id"))
	public List<Fach> getFächer() {
		return fächer;
	}

	public void setFächer(List<Fach> fächer) {
		this.fächer = fächer;
	}


    


}
