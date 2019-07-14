<table class="tabla2">
	<tbody>
		<tr>
			<td class="td_subtitulo" colspan="2">Tratamiento y Acciones del Hallazgo</td>
		</tr>
		<tr>
			<td class="nombre_campo">Registrado por</td>
			<td><?php echo $datos_proceso['registraNombre']; ?></td>
		</tr>
		<tr>
			<td class="nombre_campo">Fecha Registro</td>
			<td><?php echo $datos_proceso['fhRegistro']; ?> 
				<?php if ($datos_proceso['fhModificacion']) { ?>(modificado el <?php echo $datos_proceso['fhModificacion']; ?>)<?php } ?></td>
		</tr>
		<tr>
			<td class="nombre_campo" style="width: 200px;">Requiere acci&oacute;n correctiva</td>
			<td><?php echo $datos_proceso['accionCorrectiva'] ? "SI" : "NO" ; ?></td>
		</tr>
		<tr>
			<td class="nombre_campo">An&aacute;lisis de causa ra&iacute;z</td>
			<td><?php echo nl2br($datos_proceso['analisisCausaRaiz']); ?></td>
		</tr>
		<?php if ($datos_proceso['evidenciaCausaRaiz']): ?>
		<tr hidden>
			<td class="nombre_campo">Evidencia an&aacute;lisis causa ra&iacute;z</td>
			<td><a href="<?php echo $datos_proceso['evidenciaCausaRaiz']; ?>" target="_blank"><?php echo $datos_proceso['evidenciaCausaRaiz']; ?></a></td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="nombre_campo">Acci&oacute;n correctiva y/o preventiva de la causa ra&iacute;z</td>
			<td><?php echo $datos_proceso['accionCausaRaizNombre']; ?></td>
		</tr>
		<?php if ($datos_proceso['evidenciaAccion']): ?>
		<tr hidden>
			<td class="nombre_campo">Evidencia de la acci&oacute;n</td>
			<td><a href="<?php echo $datos_proceso['evidenciaAccion']; ?>" target="_blank"><?php echo $datos_proceso['evidenciaAccion']; ?></a></td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="nombre_campo">Descripci&oacute;n acci&oacute;n correctiva y/o preventiva</td>
			<td><?php echo nl2br($datos_proceso['descCausaRaiz']); ?></td>
		</tr>
		<tr>
			<td class="nombre_campo">Responsable acci&oacute;n</td>
			<td><?php echo $datos_proceso['responsableAccion']; ?></td>
		</tr>
		<tr>
			<td class="nombre_campo">Fecha de implementaci&oacute;n propuesta</td>
			<td><?php echo $datos_proceso['fechaPropuesta']; ?></td>
		</tr>
		<?php if ( !is_null($datos_proceso['eficazId']) && ($datos_proceso['eficazId'] != 3) ): ?>
		<tr>
			<td class="nombre_campo">Eficaz</td>
			<td><?php echo $datos_proceso['eficazNombre']; ?></td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="nombre_campo">An&aacute;lisis de riesgos y oportunidades actualizado y en estado de control</td>
			<td><?php echo $datos_proceso['analisisRiesgos'] ? "SI" : "NO" ; ?></td>
		</tr>
		<?php if ($datos_proceso['analisisRiesgos']): ?>
		<tr>
			<td class="nombre_campo">Evidencia an&aacute;lisis</td>
			<td><a href="<?php echo $datos_proceso['evidenciaAnalisisRiesgos']; ?>" target="_blank"><?php echo $datos_proceso['evidenciaAnalisisRiesgos']; ?></a></td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="nombre_campo">Comentario</td>
			<td><?php echo $datos_proceso['comentario']; ?></td>
		</tr>
	</tbody>
</table>